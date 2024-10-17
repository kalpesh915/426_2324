<?php

namespace Database\Seeders;

use App\Models\Student;
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

        // User::factory(10)->create([
        //     'name' => 'Test User',
        //     'email' => fake()->email()
        // ]);

       //Student::factory()->count(10)->create();

        student::factory(100)->create([
            "fname" => fake()->firstName(),
            "lname" => fake()->lastName(),
            "city" => fake()->city(),
            "email" => fake()->unique()->safeEmail(),
            "fees" => fake()->numberBetween(10000, 35000),
            "age" => fake()->numberBetween(20, 40),
            "dateofbirth" => fake()->date("Y-m-d", "2002-02-20")
        ]);
    }
}
