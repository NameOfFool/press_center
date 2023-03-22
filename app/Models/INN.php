<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\INN
 *
 * @property int $id
 * @property int $INN
 * @method static \Illuminate\Database\Eloquent\Builder|INN newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|INN newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|INN query()
 * @method static \Illuminate\Database\Eloquent\Builder|INN whereINN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|INN whereId($value)
 * @mixin \Eloquent
 */
class INN extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable= ["id","INN"];
}
