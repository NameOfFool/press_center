<?php

namespace App\Models;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Testing\Fluent\Concerns\Has;

/**
 * App\Models\Category
 *
 * @property int $id
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @mixin \Eloquent
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $child
 * @property-read int|null $child_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $childs
 * @property-read int|null $childs_count
 * @property-read Category|null $parent
 * @property-read Category|null $parents
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CategoryNews[] $news
 * @property-read int|null $news_count
 */
class Category extends Model
{
    use HasFactory;
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
    public function news(): HasMany
    {
        return $this->hasMany(CategoryNews::class,'category_id','id');
    }
}
