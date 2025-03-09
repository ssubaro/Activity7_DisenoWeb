<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // Make sure these seeders run before CourseSeeder
            // RoboticsKitSeeder::class,
            // TeacherSeeder::class,
            CourseSeeder::class,
        ]);
    }
}