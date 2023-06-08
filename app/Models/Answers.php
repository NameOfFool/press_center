<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Answers
 *
 * @property int $question_id
 * @property int $id
 * @property string $answer
 * @property int $correct
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Answers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Answers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Answers query()
 * @method static \Illuminate\Database\Eloquent\Builder|Answers whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answers whereCorrect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answers whereQuestionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Answers whereUpdatedAt($value)
 * @property-read \App\Models\Questions $question
 * @mixin \Eloquent
 */
class Answers extends Model
{
    use HasFactory;

    public function question():BelongsTo{
        return $this->belongsTo(Questions::class);
    }
}
