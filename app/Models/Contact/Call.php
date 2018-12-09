<?php

namespace App\Models\Contact;

use Parsedown;
use App\Models\Account\Account;
use App\Models\ModelBindingWithContact as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Http\Resources\Emotion\Emotion;

class Call extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['called_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'contact_called' => 'boolean',
    ];

    /**
     * Get the account record associated with the call.
     *
     * @return BelongsTo
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Get the contact record associated with the call.
     *
     * @return BelongsTo
     */
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    /**
     * Get the emotion records associated with the call.
     *
     * @return BelongsToMany
     */
    public function emotions()
    {
        return $this->belongsToMany(Emotion::class, 'emotion_call')
                    ->withPivot('account_id', 'contact_id')
                    ->withTimestamps();
    }

    /**
     * Return the markdown parsed body.
     *
     * @return string
     */
    public function getParsedContentAttribute()
    {
        if (is_null($this->content)) {
            return;
        }

        return (new Parsedown())->text($this->content);
    }
}
