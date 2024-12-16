<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
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

        Faculty::factory()->create([
            'name' => 'Gary Bhanot'
        ]);

        Faculty::factory()->create([
            'name' => 'Sean Doyle'
        ]);

        Faculty::factory()->create([
            'name' => 'Adam Thomas'
        ]);


        Student::factory(100)->create();
        Course::factory(20)->create();
        Faculty::factory(5)->create();
    }
}

//         Student::factory(100) ->create();


//         Courses::factory() -> create([
//             'course_name' => 'Mohammeed',
//             'course_index' => 'first course',
//             'course_description' = 'Php class',
//             'faculty_id' => '1'
//         ]);

//         Faculty::factory() -> create{[
//             'name' => 'Gary Bhanot'
//         ]};
//         Faculty::factory() -> create{[
//             'name' => 'Adam Thomas'
//         ]}; Faculty::factory() -> create{[
//             'name' => 'Sean Doyle'
//         ]};
//     }
// }


