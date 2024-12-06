<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Course;
use App\Models\User;
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

        // Course::factory()->create([
        //     'name' => 'PHP',
        //     'courseId' => 'HTTP5225',
        //     'description' =>'PHP'
        // ]);
        
        // Course::factory()->create([
        //     'name' => 'Node.js',
        //     'courseId' => 'HTTP5225',
        //     'description' =>'PHP'
        // ]);

        // Course::factory()->create([
        //     'name' => 'Javascript',
        //     'courseId' => 'HTTP5225',
        //     'description' =>'PHP'
        // ]);

        Student::factory(100)->create();
        Course::factory(100)->create();
    }
}
