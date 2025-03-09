<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\RoboticsKit;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Make sure we have RoboticsKits and Teachers before creating courses
        if (RoboticsKit::count() == 0) {
            $this->command->info('Please create some robotics kits first!');
            return;
        }

        if (Teacher::count() == 0) {
            $this->command->info('Please create some teachers first!');
            return;
        }

        $roboticsKits = RoboticsKit::pluck('id')->toArray();
        $teachers = Teacher::pluck('id')->toArray();
        $faker = \Faker\Factory::create();
        
        for ($i = 1; $i <= 100; $i++) {
            Course::create([
                'course_key' => 'ROB' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph(),
                'course_cover' => 'covers/default.jpg',
                'robotics_kit_id' => $faker->randomElement($roboticsKits),
                'teacher_id' => $faker->randomElement($teachers),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ]);
        }
        
        $this->command->info('100 courses created successfully!');
    }
}