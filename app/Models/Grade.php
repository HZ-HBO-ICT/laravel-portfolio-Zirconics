<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = ['course_name', 'test_name', 'ec', 'best_grade'];

    /**
     * Function that adds a result
     *
     * @return string
     */
    public function addResult($grade)
    {
        if ($this->best_grade < $grade) {
            $this->best_grade = $grade;
            if ($this->best_grade >= $this->lowest_passing_grade) {
                $this->passed_at = now();
                $course = Course::where('id', $this->course_id)->first();
                $course->assignCredits();
            }
            $this->save();
            return 'Added new Result...';
        } else {
            return 'Previous Result was better';
        }
    }

    /**
     * Function that has a relation with the Course model
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
