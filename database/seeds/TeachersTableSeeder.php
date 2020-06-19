<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Teacher;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $teachers = 10;

        for ($i = 0; $i < $teachers; $i++) {
            $gender = $faker->randomElement(['male', 'female']);
            $genderShort = ($gender == 'male') ? 'm' : 'f';

            $newTeacher = new Teacher();
            $newTeacher->name = $faker->name($gender);
            $newTeacher->gender = $genderShort;
            $newTeacher->age = $faker->numberBetween($min = 22, $max = 45);
            
            $newTeacher->save();
        }
    }
}
