<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TestResult
 *
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestResult query()
 * @mixin \Eloquent
 */
class TestResult extends Model
{
    use HasFactory;
    public $table = "tests_results";
    public $timestamps = false;
    public $fillable = ["user_id","question_id","answer_id"];
}
