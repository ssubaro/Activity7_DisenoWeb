<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\RoboticsKit;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $courseNumber = 1;
        $roboticsKits = RoboticsKit::pluck('id')->toArray();
        $teachers = Teacher::pluck('id')->toArray();
        
        return [
            'course_key' => 'ROB' . str_pad($courseNumber++, 3, '0', STR_PAD_LEFT),
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'course_cover' => 'covers/default.jpg', // ruta por defecto para la portada
            'robotics_kit_id' => $this->faker->randomElement($roboticsKits),
            'teacher_id' => $this->faker->randomElement($teachers),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'updated_at' => now(),
        ];
    }
}