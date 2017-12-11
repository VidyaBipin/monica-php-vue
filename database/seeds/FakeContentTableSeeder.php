<?php

use App\Account;
use App\Contact;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\ConsoleOutput;

class FakeContentTableSeeder extends Seeder
{
    private $numberOfContacts;
    private $contact;
    private $faker;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // populate account table
        $accountID = DB::table('accounts')->insertGetId([
            'api_key' => str_random(30),
        ]);

        $account = Account::find($accountID);
        $account->populateContactFieldTypeTable();

        // populate user table
        $userId = DB::table('users')->insertGetId([
            'account_id' => $accountID,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'timezone' => config('app.timezone'),
            'remember_token' => str_random(10),
        ]);

        $this->faker = Faker::create();

        // create a random number of contacts
        $this->numberOfContacts = rand(30, 100);
        echo 'Generating '.$this->numberOfContacts.' fake contacts'.PHP_EOL;

        $output = new ConsoleOutput();
        $progress = new ProgressBar($output, $this->numberOfContacts);
        $progress->start();

        for ($i = 0; $i < $this->numberOfContacts; $i++) {
            $timezone = config('app.timezone');
            $gender = (rand(1, 2) == 1) ? 'male' : 'female';

            // create contact entry
            $contactID = DB::table('contacts')->insertGetId([
                'account_id' => $accountID,
                'gender' => $gender,
                'first_name' => $this->faker->firstName($gender),
                'last_name' => (rand(1, 2) == 1) ? $this->faker->lastName : null,
            ]);

            $this->contact = Contact::find($contactID);
            $this->contact->setAvatarColor();

            $this->populateFoodPreferencies();
            $this->populateDeceasedDate();
            $this->populateBirthday();
            $this->populateFirstMetInformation();
            $this->populateKids();
            $this->populatePartners();
            $this->populateNotes();
            $this->populateActivities();
            $this->populateTasks();
            $this->populateDebts();
            $this->populateGifts();

            $progress->advance();
        }

        $progress->finish();

        // create the second test, blank account
        $accountID = DB::table('accounts')->insertGetId([
            'api_key' => str_random(30),
        ]);

        // populate user table
        $userId = DB::table('users')->insertGetId([
            'account_id' => $accountID,
            'first_name' => 'Blank',
            'last_name' => 'State',
            'email' => 'blank@blank.com',
            'password' => bcrypt('blank'),
            'timezone' => config('app.timezone'),
            'remember_token' => str_random(10),
        ]);
    }

    public function populateFoodPreferencies()
    {
        // add food preferencies
        if (rand(1, 2) == 1) {
            $this->contact->food_preferencies = $this->faker->realText();
            $this->contact->save();
        }
    }

    public function populateDeceasedDate()
    {
        // deceased?
        if (rand(1, 7) == 1) {
            $this->contact->is_dead = true;

            if (rand(1,3) == 1) {
                $deceasedDate = $this->faker->dateTimeThisCentury();

                if (rand(1, 2) == 1) {
                    // add a date where we don't know the year
                    $specialDate = $this->contact->setSpecialDate('deceased_date', 0, $deceasedDate->format('m'), $deceasedDate->format('d'));
                } else {
                    // add a date where we know the year
                    $specialDate = $this->contact->setSpecialDate('deceased_date', $deceasedDate->format('Y'), $deceasedDate->format('m'), $deceasedDate->format('d'));
                }
                $newReminder = $specialDate->setReminder('year', 1);
                $newReminder->title = trans('people.deceased_reminder_title', ['name' => $this->contact->first_name]);
                $newReminder->save();
            }

            $this->contact->save();
        }
    }

    public function populateBirthday()
    {
        if (rand(1, 2) == 1) {
            $birthdate = $this->faker->dateTimeThisCentury();

            if (rand(1, 2) == 1) {
                if (rand(1, 2) == 1) {
                    // add a date where we don't know the year
                    $specialDate = $this->contact->setSpecialDate('birthdate', 0, $birthdate->format('m'), $birthdate->format('d'));
                } else {
                    // add a date where we know the year
                    $specialDate = $this->contact->setSpecialDate('birthdate', $birthdate->format('Y'), $birthdate->format('m'), $birthdate->format('d'));
                }

                $newReminder = $specialDate->setReminder('year', 1);
                $newReminder->title = trans('people.people_add_birthday_reminder', ['name' => $this->contact->first_name]);
                $newReminder->save();
            } else {
                // add a birthdate based on an approximate age
                $specialDate = $this->contact->setSpecialDateFromAge('birthdate', rand(10, 100));
            }
        }
    }

    public function populateFirstMetInformation()
    {
        if (rand(1, 2) == 1) {
            $this->contact->first_met_where = $this->faker->realText(20);
        }

        if (rand(1, 2) == 1) {
            $this->contact->first_met_additional_info = $this->faker->realText(20);
        }

        if (rand(1, 2) == 1) {
            $firstMetDate = $this->faker->dateTimeThisCentury();

            if (rand(1, 2) == 1) {
                // add a date where we don't know the year
                $specialDate = $this->contact->setSpecialDate('first_met', 0, $firstMetDate->format('m'), $firstMetDate->format('d'));
            } else {
                // add a date where we know the year
                $specialDate = $this->contact->setSpecialDate('first_met', $firstMetDate->format('Y'), $firstMetDate->format('m'), $firstMetDate->format('d'));
            }
            $newReminder = $specialDate->setReminder('year', 1);
            $newReminder->title = trans('people.introductions_reminder_title', ['name' => $this->contact->first_name]);
            $newReminder->save();
        }

        if (rand(1, 2) == 1) {
            do {
                $rand = rand(1, $this->numberOfContacts);
            } while(in_array($rand, array($this->contact->id)));

            $this->contact->first_met_through_contact_id = $rand;
        }

        $this->contact->save();
    }

    public function populateKids()
    {
        if (rand(1, 2) == 1) {
            foreach (range(1, rand(2, 6)) as $index) {
                $gender = (rand(1, 2) == 1) ? 'male' : 'female';
                $kid = Contact::create([
                        'first_name' => $this->faker->firstName($gender),
                        'last_name' => $this->faker->lastName($gender),
                        'gender' => $gender,
                        'account_id' => $this->contact->account_id,
                ]);

                // is real contact?
                if (rand(1, 2) == 1) {
                    $kid->is_partial = true;
                    $kid->isTheOffspringOf($this->contact);
                } else {
                    $kid->is_partial = false;
                    $kid->isTheOffspringOf($this->contact, true);
                }
                $kid->save();

                // birthdate
                $kidBirthDate = $this->faker->dateTimeThisCentury();
                if (rand(1, 2) == 1) {
                    // add a date where we don't know the year
                    $specialDate = $kid->setSpecialDate('birthdate', 0, $kidBirthDate->format('m'), $kidBirthDate->format('d'));
                } else {
                    // add a date where we know the year
                    $specialDate = $kid->setSpecialDate('birthdate', $kidBirthDate->format('Y'), $kidBirthDate->format('m'), $kidBirthDate->format('d'));
                }
                $newReminder = $specialDate->setReminder('year', 1);
                $newReminder->title = trans('people.people_add_birthday_reminder', ['name' => $kid->first_name]);
                $newReminder->save();
            }
        }
    }

    public function populatePartners()
    {
        if (rand(1, 2) == 1) {
            foreach (range(1, rand(2, 6)) as $index) {
                $gender = (rand(1, 2) == 1) ? 'male' : 'female';
                $partner = Contact::create([
                        'first_name' => $this->faker->firstName($gender),
                        'last_name' => $this->faker->lastName($gender),
                        'gender' => $gender,
                        'account_id' => $this->contact->account_id,
                ]);

                // is real contact?
                if (rand(1, 2) == 1) {
                    $partner->is_partial = true;
                    $this->contact->setRelationshipWith($partner);
                } else {
                    $partner->is_partial = false;
                    $this->contact->setRelationshipWith($partner, true);
                }
                $partner->save();

                // birthdate
                $partnerBirthDate = $this->faker->dateTimeThisCentury();
                if (rand(1, 2) == 1) {
                    // add a date where we don't know the year
                    $specialDate = $partner->setSpecialDate('birthdate', 0, $partnerBirthDate->format('m'), $partnerBirthDate->format('d'));
                } else {
                    // add a date where we know the year
                    $specialDate = $partner->setSpecialDate('birthdate', $partnerBirthDate->format('Y'), $partnerBirthDate->format('m'), $partnerBirthDate->format('d'));
                }
                $newReminder = $specialDate->setReminder('year', 1);
                $newReminder->title = trans('people.people_add_birthday_reminder', ['name' => $partner->first_name]);
                $newReminder->save();
            }
        }
    }

    public function populateNotes()
    {
        if (rand(1, 2) == 1) {
            for ($j = 0; $j < rand(1, 13); $j++) {
                $note = $this->contact->notes()->create([
                    'body' => $this->faker->realText(rand(40, 500)),
                    'account_id' => $this->contact->account_id,
                    'is_favorited' => (rand(1,3) == 1 ? true : false),
                    'favorited_at' => $this->faker->dateTimeThisCentury(),
                ]);

                $this->contact->logEvent('note', $note->id, 'create');
            }
        }
    }

    public function populateActivities()
    {
        if (rand(1, 2) == 1) {
            for ($j = 0; $j < rand(1, 13); $j++) {
                $activity = $this->contact->activities()->create([
                    'summary' => $this->faker->realText(rand(40, 100)),
                    'date_it_happened' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
                    'activity_type_id' => rand(1, 13),
                    'description' => $this->faker->realText(rand(100, 1000)),
                    'account_id' => $this->contact->account_id,
                ]);

                $this->contact->logEvent('activity', $activity->id, 'create');
            }
        }
    }

    public function populateTasks()
    {
        if (rand(1, 2) == 1) {
            for ($j = 0; $j < rand(1, 10); $j++) {
                $task = $this->contact->tasks()->create([
                    'title' => $this->faker->realText(rand(40, 100)),
                    'description' => $this->faker->realText(rand(100, 1000)),
                    'completed' => (rand(1, 2) == 1 ? 0 : 1),
                    'completed_at' => (rand(1, 2) == 1 ? $this->faker->dateTimeThisCentury() : null),
                    'account_id' => $this->contact->account_id,
                ]);

                $this->contact->logEvent('task', $task->id, 'create');
            }
        }
    }

    public function populateDebts()
    {
        if (rand(1, 2) == 1) {
            for ($j = 0; $j < rand(1, 6); $j++) {
                $debt = $this->contact->debts()->create([
                    'in_debt' => (rand(1, 2) == 1 ? 'yes' : 'no'),
                    'amount' => rand(321, 39391),
                    'reason' => $this->faker->realText(rand(100, 1000)),
                    'status' => 'inprogress',
                    'account_id' => $this->contact->account_id,
                ]);

                $this->contact->logEvent('debt', $debt->id, 'create');
            }
        }
    }

    public function populateGifts()
    {
        if (rand(1, 2) == 1) {
            for ($j = 0; $j < rand(1, 31); $j++) {
                $gift = $this->contact->gifts()->create([

                    'name' => $this->faker->realText(rand(10, 100)),
                    'comment' => $this->faker->realText(rand(1000, 5000)),
                    'url' => $this->faker->url,
                    'value' => rand(12, 120),
                    'account_id' => $this->contact->account_id,
                    'is_an_idea' => 'true',
                    'has_been_offered' => 'false',
                ]);

                $this->contact->logEvent('gift', $gift->id, 'create');
            }
        }
    }
}
