<?php

namespace App\ExportResources\Instance;

use App\Services\Account\Settings\ExportResource;

class SpecialDate extends ExportResource
{
    protected $columns = [
        'uuid',
        'is_age_based',
        'is_year_unknown',
        'date',
        'created_at',
        'updated_at',
    ];
}
