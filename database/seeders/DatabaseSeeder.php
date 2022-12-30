<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
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


        $topics = ["Eloquent", "Validation", "Refactoring", "Testing", "Authorization"];
        foreach ($topics as $item) {
            Topic::create([
                'name' => $item
            ]);
        }

        $platforms = ["Laracasts", "Laravel Daily", "Codecourse", "Spatie", "Youtube"];
        foreach ($platforms as $item) {
            Platform::create([
                'name' => $item
            ]);
        }

        $authors = ["Lancer", "Abir", "Kumar"];
        foreach ($authors as $item) {
            Author::create([
                'name' => $item
            ]);
        }


        //Create fake 50 User 
        User::factory(50)->create();
 

        //Create fake 50 Course
        Course::factory(100)->create();


        $courses = Course::all();
        foreach ($courses as $course) {
           // random topics array
           $topics = Topic::all()->random(rand(1, 5))->pluck('id')->toArray();
           $course->topics()->attach($topics);

           $authors = Author::all()->random(rand(1, 3))->pluck('id')->toArray();
           $course->authors()->attach($authors);

           $series = Series::all()->random(rand(1, 6))->pluck('id')->toArray();
           $course->series()->attach($series);
        }
        

    }
}
