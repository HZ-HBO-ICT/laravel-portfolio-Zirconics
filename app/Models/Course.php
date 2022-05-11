<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * Method that check whether that updates the course information when passed.
     *
     * @return void
     */
    public function assignCredits()
    {
        $grades = Grade::where('course_id', $this->id)->get();
        $calculationIsAllowed = true;
        $sum = 0;
        $amountOfGrades = 0;

        while ($calculationIsAllowed) {
            foreach ($grades as $grade) {
                if ($grade->best_grade >= 5.5 && $calculationIsAllowed === true) {
                    $sum += $grade->best_grade;
                    $amountOfGrades++;
                } else {
                    $calculationIsAllowed = false;
                }
            }
        }
        if (($sum / $amountOfGrades) >= 5.5) {
            $this->passed_at = now();
        }
        $this->save();
    }


    /**
     * Function that has a relation with the Grade model
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
}
