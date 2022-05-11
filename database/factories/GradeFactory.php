<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => factory(Course::class),
            'test_name' => $this->faker->title,
            'best_grade' => $this->faker->numberBetween(1, 10),
        ];
    }
}
