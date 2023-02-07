<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    protected $table = 'categories';
    protected $fillable =['name','description'];
    public function child(): HasMany
    {
    return $this->hasMany(Category::class,'parent_id','id');
    }
    public function childs(): HasMany
    {
        return $this->hasMany(Category::class,'parent_id')->with('child');
    }
    public function parent():BelongsTo
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    public function parents(): BelongsTo
    {
        return $this->belongsTo(Category::class,'parent_id')->with('parent');
    }
}
