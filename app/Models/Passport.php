<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Passport
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Passport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Passport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Passport query()
 * @property int $id
 * @property string $birth_data
 * @property string $sex
 * @property string $series
 * @property string $number
 * @property string $date_of_issue
 * @property string $issued_by
 * @property string $code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereBirthData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereDateOfIssue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereIssuedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereSeries($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Passport whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Passport extends Model
{
    use HasFactory;
}
