<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
 */
class CategoryNews extends Model
{
    use HasFactory;
}
