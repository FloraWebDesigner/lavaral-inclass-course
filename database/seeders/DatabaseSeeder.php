<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Course;
use App\Models\User;
use App\Models\Faculty;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Course::factory()->create([
            'courseName' => 'PHP',
            'courseID' => 'HTTP5225',
            'description' =>'PHP',
            'faculty_id' =>'2'
        ]);
        
        Course::factory()->create([
            'courseName' => 'Node.js',
            'courseID' => 'HTTP5225',
            'description' =>'PHP',
            'faculty_id' =>'1'
        ]);

        Course::factory()->create([
            'courseName' => 'Javascript',
            'courseID' => 'HTTP5225',
            'description' =>'PHP',
            'faculty_id' =>'3'
        ]);

        Faculty::factory()->create([
            'name'=>"Gary"
        ]);

        Faculty::factory()->create([
            'name'=>"Sean"
        ]);

        Faculty::factory()->create([
            'name'=>"Adam"
        ]);


        Student::factory(100)->create();
        //Course::factory(100)->create();
    }
}
