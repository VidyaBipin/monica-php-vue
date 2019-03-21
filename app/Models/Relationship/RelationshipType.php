<?php

namespace App\Models\Relationship;

use App\Models\Contact\Gender;
use App\Models\Account\Account;
use App\Models\Contact\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RelationshipType extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    protected $table = 'relationship_types';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'delible' => 'boolean',
    ];

    /**
     * Get the account record associated with the reminder.
     *
     * @return BelongsTo
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Get the relationship type group record associated with the reminder.
     *
     * @return BelongsTo
     */
    public function relationshipTypeGroup()
    {
        return $this->belongsTo(RelationshipTypeGroup::class);
    }

    /**
     * Get the i18n version of the name attribute, like "Significant other".
     *
     * @psalm-suppress InvalidReturnType
     * @psalm-suppress InvalidReturnStatement
     *
     * @return array|string|null|\Illuminate\Contracts\Translation\Translator
     */
    public function getLocalizedName(Contact $contact = null, bool $includeOpposite = false, $gender = null)
    {
        $defaultGenderType = Gender::MALE;
        if ($this->account->default_gender_id) {
            $defaultGender = Gender::where([
                'account_id' => $this->account_id,
            ])->find($this->account->default_gender_id);
            if ($defaultGender) {
                $defaultGenderType = $defaultGender->type;
            }
        }
        if (is_null($gender)) {
            $gender = $defaultGenderType;
        }

        // include the reverse of the relation in the string (masculine/feminine)
        // this is used in the dropdown of the relationship types when creating
        // or deleting a relationship.
        if (! is_null($contact)) {
            if ($includeOpposite) {
                // in some language, masculine and feminine version of a relationship type is the same.
                // we need to keep just one version in that case.
                $femaleVersion = trans('app.relationship_type_'.$this->name.'_female');
                $maleVersion = trans('app.relationship_type_'.$this->name);
                $withName = trans('app.relationship_type_'.$this->name.'_with_name', ['name' => $contact->name]);

                // `Regis Freyd's significant other`
                if ($femaleVersion === $maleVersion) {
                    return $withName;
                }

                // otherwise `Regis Freyd's uncle/aunt`
                if ($defaultGenderType === Gender::FEMALE) {
                    return trans('app.relationship_type_'.$this->name.'_female_with_name', ['name' => $contact->name]).'/'.$maleVersion;
                } else {
                    return $withName.'/'.$femaleVersion;
                }
            } else {
                // `Regis Freyd's uncle`
                if (! is_null($contact)) {
                    if ($gender == Gender::FEMALE) {
                        return trans('app.relationship_type_'.$this->name.'_female_with_name', ['name' => $contact->name]);
                    }

                    return trans('app.relationship_type_'.$this->name.'_with_name', ['name' => $contact->name]);
                }
            }
        }

        // `aunt`
        if ($gender == Gender::FEMALE) {
            return trans('app.relationship_type_'.$this->name.'_female');
        }

        // `uncle`
        return trans('app.relationship_type_'.$this->name);
    }
}
