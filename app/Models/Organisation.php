<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Organisation
 *
 * @property int $id
 * @property int $user_id
 * @property string $organisation_name
 * @property string $organisation_email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Organisation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organisation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Organisation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Organisation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organisation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organisation whereOrganisationEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organisation whereOrganisationName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organisation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Organisation whereUserId($value)
 * @property-read \App\Models\KPP|null $kpp
 * @mixin \Eloquent
 */
class Organisation extends Model
{
    use HasFactory;
    protected $fillable = ["organisation_name","organisation_email","user_id"];
    public function kpp(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->HasOne(KPP::class,"id");
    }
}
