<?php

namespace App\Traits;

use App\Helpers\MoneyHelper;
use App\Models\Settings\Currency;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait AmountFormatter
{
    /**
     * Get the currency record associated with the debt.
     *
     * @return BelongsTo
     */
    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    /**
     * Set exchange value.
     *
     * @return void
     */
    public function setAmountAttribute($value)
    {
        $this->attributes['amount'] = MoneyHelper::formatInput($value, $this->currency);
    }

    /**
     * Get value of amount.
     *
     * @return float|null
     */
    public function getAmountAttribute(): ?float
    {
        if (! in_array('amount', $this->attributes) || ! $this->attributes['amount']) {
            return null;
        }

        return MoneyHelper::exchangeValue($this->attributes['amount'], $this->currency);
    }

    /**
     * Get value of amount (without currency).
     *
     * @return string
     */
    public function getValueAttribute(): string
    {
        if (! in_array('amount', $this->attributes) || ! $this->attributes['amount']) {
            return '';
        }

        return MoneyHelper::formatValue($this->attributes['amount'], $this->currency);
    }

    /**
     * Get display value: amount with currency.
     *
     * @return string
     */
    public function getDisplayValueAttribute(): string
    {
        if (! in_array('amount', $this->attributes) || ! $this->attributes['amount']) {
            return '';
        }

        return MoneyHelper::format($this->attributes['amount'], $this->currency);
    }
}
