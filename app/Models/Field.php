<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Field
 *
 * @property int $id
 * @property string $field_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Field newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Field newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Field query()
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereFieldName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereUpdatedAt($value)
 * @property string|null $auto_table_name
 * @property string|null $auto_field_name
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereAutoFieldName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Field whereAutoTableName($value)
 * @mixin \Eloquent
 */
class Field extends Model
{
    use HasFactory;

    protected $fillable = [
        'field_name',
        'auto_table_name',
        'auto_field_name'
    ];
}
