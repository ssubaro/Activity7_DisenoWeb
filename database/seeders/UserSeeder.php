<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Group;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear grupo para el estudiante
        $group = Group::create([
            'name' => 'Principiante',
            'level' => 'principiante',
            'description' => 'Grupo para estudiantes principiantes'
        ]);

        // Usuario Administrativo
        $adminUser = User::create([
            'username' => 'Admon',
            'email' => 'admon@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'full_name' => 'Administrator User',
            'role' => 'admin'
        ]);
        
        Admin::create([
            'user_id' => $adminUser->id,
            'department' => 'Administration',
            'hire_date' => now()
        ]);

        // Usuario Profesor
        $teacherUser = User::create([
            'username' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'full_name' => 'Teacher User',
            'role' => 'teacher'
        ]);
        
        Teacher::create([
            'user_id' => $teacherUser->id,
            'specialization' => 'Robotics',
            'hire_date' => now()
        ]);

        // Usuario Estudiante
        $studentUser = User::create([
            'username' => 'Student',
            'email' => 'student@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'full_name' => 'Student User',
            'role' => 'student'
        ]);
        
        Student::create([
            'user_id' => $studentUser->id,
            'group_id' => $group->id,
            'enrollment_date' => now()
        ]);
    }
}