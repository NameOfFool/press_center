<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Questions
 *
 * @property int $id
 * @property int $lesson_id
 * @property string $question
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Questions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Questions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Questions query()
 * @method static \Illuminate\Database\Eloquent\Builder|Questions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questions whereLessonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questions whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Questions whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Answers> $answers
 * @property-read int|null $answers_count
 * @mixin \Eloquent
 */
class Questions extends Model
{
    use HasFactory;
    public function answers():HasMany
    {
        return $this->hasMany(Answers::class,"question_id","id");
    }
}
