<?php

namespace App\Http\Controllers;

use Auth;
use App\Day;
use App\Entry;
use Validator;
use DatePeriod;
use DateInterval;
use Carbon\Carbon;
use App\JournalEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Journal\DaysRequest;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('journal.index');
    }

    /**
     * Get all the journal entries.
     * @return array
     */
    public function list()
    {
        $entries = collect([]);
        $journalEntries = auth()->user()->account->journalEntries()->paginate(30);

        // this is needed to determine if we need to display the calendar
        // (month + year) next to the journal entry
        $previousEntryMonth = 0;
        $showCalendar = true;

        foreach ($journalEntries as $journalEntry) {
            if ($previousEntryMonth == $journalEntry->date->month) {
                $showCalendar = false;
            }

            $data = [
                'id' => $journalEntry->id,
                'date' => $journalEntry->date,
                'journalable_id' => $journalEntry->journalable_id,
                'journalable_type' => $journalEntry->journalable_type,
                'object' => $journalEntry->getObjectData(),
                'show_calendar' => $showCalendar,
            ];
            $entries->push($data);

            $previousEntryMonth = $journalEntry->date->month;
            $showCalendar = true;
        }

        // I need the pagination items when I send back the array.
        // There is probably a simpler way to achieve this.
        $jsonToSendBack = [
            'total' => $journalEntries->total(),
            'per_page' => $journalEntries->perPage(),
            'current_page' => $journalEntries->currentPage(),
            'next_page_url' => $journalEntries->nextPageUrl(),
            'prev_page_url' => $journalEntries->previousPageUrl(),
            'data' => $entries,
        ];

        return $jsonToSendBack;
    }

    /**
     * Gets the details of a single Journal Entry.
     * @param  JournalEntry $journalEntry
     * @return array
     */
    public function get(JournalEntry $journalEntry)
    {
        $object = $journalEntry->getObjectData();

        return $object;
    }

    /**
     * Store the day entry.
     */
    public function storeDay(DaysRequest $request)
    {
        $day = auth()->user()->account->days()->create([
            'date' => \Carbon\Carbon::now(auth()->user()->timezone),
            'rate' => $request->get('rate'),
        ]);

        // Log a journal entry
        $journalEntry = (new JournalEntry)->add($day);

        $data = [
            'id' => $journalEntry->id,
            'date' => $journalEntry->date,
            'journalable_id' => $journalEntry->journalable_id,
            'journalable_type' => $journalEntry->journalable_type,
            'object' => $journalEntry->getObjectData(),
            'show_calendar' => true,
        ];

        return $data;
    }

    /**
     * Delete the Day entry.
     * @return mixed
     */
    public function trashDay($day)
    {
        $day = Day::findOrFail($day->id);
        $day->deleteJournalEntry();
        $day->delete();
    }

    /**
     * Indicates whether the user has already rated the current day.
     * @return bool
     */
    public function hasRated()
    {
        if (auth()->user()->hasAlreadyRatedToday()) {
            return 'true';
        }

        return 'notYet';
    }

    /**
     * Display the Create journal entry screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('journal.add');
    }

    /**
     * Saves the journal entry.
     *
     * @param  Request $request
     * @return Response
     */
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'entry' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }

        $entry = new Entry;
        $entry->account_id = Auth::user()->account_id;
        $entry->post = $request->input('entry');

        if ($request->input('title') != '') {
            $entry->title = $request->input('title');
        }

        $entry->save();

        // Log a journal entry
        $journalEntry = (new JournalEntry)->add($entry);

        return redirect()->route('journal.index');
    }

    /**
     * Delete the reminder.
     */
    public function deleteEntry(Request $request, $entryId)
    {
        $entry = Entry::findOrFail($entryId);

        if ($entry->account_id != Auth::user()->account_id) {
            return redirect()->route('people.index');
        }

        $entry->deleteJournalEntry();
        $entry->delete();
    }

    /**
     * Display mood trends over time.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function moods(Request $request)
    {
        $results = [
            'unit' => 'months',
            'range' => 12,
            'data' => [],
            'available_units' => ['days', 'weeks', 'months', 'years'],
        ];
        $start = Carbon::now()->subMonths($results['range']);
        $dateIntervalValue = 'P1D';
        $period = new DatePeriod($start, new DateInterval($dateIntervalValue), Carbon::now());
        foreach ($period as $date) {
            $dateString = $date->format('Y-m-d');
            $rating = auth()->user()->account->days()->whereDate('date', $dateString)->pluck('rate')->first();
            $results['data'][] = ['date' => $dateString, 'rating' => $rating];
        }

        return $results;
    }
}
