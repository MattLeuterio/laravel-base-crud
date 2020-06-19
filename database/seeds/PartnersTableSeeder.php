<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Partner;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $partners = 20;

        for ($i = 0; $i < $partners; $i++) {

            $newPartner = new Partner();
            $newPartner->company = $faker->company;
            $newPartner->slogan = $faker->catchPhrase;
            $newPartner->job = $faker->jobTitle;

            $newPartner->save();

        }
    }
}
