<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\News
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string $date_of_creation
 * @property string $date_of_publication
 * @property string $date_of_drop
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @method static \Illuminate\Database\Eloquent\Builder|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News query()
 * @method static \Illuminate\Database\Eloquent\Builder|News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereDateOfCreation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereDateOfDrop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereDateOfPublication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereName($value)
 * @mixin \Eloquent
 */
class News extends Model
{   protected $table = 'news';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = 'true';
    protected $fillable =[
        'name',
        'content',
        'date_of_creation',
        'date_of_drop',
        'date_of_publication',
    ];
    use HasFactory;
    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class,'category_news','news_id','category_id');
    }
}
