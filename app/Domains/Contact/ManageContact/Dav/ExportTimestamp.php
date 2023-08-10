<?php

namespace App\Domains\Contact\ManageContact\Dav;

use App\Domains\Contact\Dav\ExportVCardResource;
use App\Domains\Contact\Dav\Order;
use App\Domains\Contact\Dav\VCardResource;
use App\Domains\Contact\Dav\VCardType;
use App\Models\Contact;
use Sabre\VObject\Component\VCard;

#[Order(1000)]
#[VCardType(Contact::class)]
class ExportTimestamp implements ExportVCardResource
{
    public function export(VCardResource $contact, VCard $vcard): void
    {
        $vcard->remove('REV');

        $vcard->REV = $contact->updated_at->format('Ymd\\THis\\Z');
    }
}
