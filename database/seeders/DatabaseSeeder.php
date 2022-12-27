<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\Platform;
use App\Models\Series;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $series = ["PHP", "Laravel", "NodeJS", "React JS", "MongoDB", "MySQL"];
        foreach ($series as $item) {
            Series::create([
                'name' => $item
            ]);
        }


        $topic = ["Eloquent", "Validation", "Refactoring", "Testing", "Authorization"];
        foreach ($topic as $item) {
            Topic::create([
                'name' => $item
            ]);
        }

        $platform = ["Laracasts", "Laravel Daily", "Codecourse", "Spatie", "Youtube"];
        foreach ($platform as $item) {
            Platform::create([
                'name' => $item
            ]);
        }


        //Create fake 50 User 
        User::factory(50)->create();


        //Create fake 50 Course
        Course::factory(100)->create();

    }
}
