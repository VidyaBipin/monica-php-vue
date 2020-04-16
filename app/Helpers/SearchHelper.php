<?php

namespace App\Helpers;

use function Safe\preg_match;
use App\Models\Contact\Contact;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact\ContactFieldType;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class SearchHelper
{
    /**
     * Search contacts by the given query.
     *
     * @param  string $needle
     * @param  int $limitPerPage
     * @param  string $orderByColumn
     * @param  string $orderByDirection
     * @return mixed
     */
    public static function searchContacts(string $needle, int $limitPerPage, string $orderByColumn, string $orderByDirection = 'asc'): LengthAwarePaginator
    {
        $accountId = Auth::user()->account_id;

        if (preg_match('/(.{1,})[:](.{1,})/', $needle, $matches)) {
            $search_field = $matches[1];
            $search_term = $matches[2];

            $field = ContactFieldType::where('account_id', $accountId)
                ->where('name', 'LIKE', $search_field)
                ->first();

            $field_id = is_null($field) ? 0 : $field->id;

            return Contact::whereHas('contactFields', function ($query) use ($accountId, $field_id, $search_term) {
                $query->where([
                    ['account_id', $accountId],
                    ['data', 'like', "$search_term%"],
                    ['contact_field_type_id', $field_id],
                ]);
            })
                ->orderBy($orderByColumn, $orderByDirection)
                ->paginate($limitPerPage);
        }

        return Contact::search($needle, $accountId, $orderByColumn, $orderByDirection)
                ->paginate($limitPerPage);
    }
}
