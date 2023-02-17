<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PHPUnit\Exception;

/**
 * App\Models\CategoryNews
 *
 * @property int $category_id
 * @property int $news_id
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryNews newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryNews newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryNews query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryNews whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryNews whereNewsId($value)
 * @mixin \Eloquent
 * @property-read \App\Models\News $news
 */
class CategoryNews extends Model
{
    use HasFactory;
    protected $fillable = [
      'category_id',
      'news_id'
    ];
    public $timestamps = false;

    public function news(): BelongsTo
    {
        return $this->belongsTo(News::class, 'news_id', 'id');
    }

    public static function getNewsByCategoryId(int $id)
    {
        try {
            return CategoryNews::whereCategoryId($id)->firstOrFail()->news()->get();
        }
        catch (ModelNotFoundException $e){
            return [];
    }
    }
}
