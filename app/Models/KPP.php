<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\KPP
 *
 * @property int $id
 * @property string $KPP
 * @method static \Illuminate\Database\Eloquent\Builder|KPP newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KPP newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KPP query()
 * @method static \Illuminate\Database\Eloquent\Builder|KPP whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KPP whereKPP($value)
 * @mixin \Eloquent
 */
class KPP extends Model
{
    use HasFactory;
    protected $fillable = ['KPP'];
    public $timestamps = false;
}
