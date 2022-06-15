<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        foreach ( range(1,100) as $index) {


            DB::table('student_tlb')->insert([
                'first_name'=>$faker->firstName,
                'last_name'=>$faker->lastName,
                'dob'=>$faker->date,
                'gender' => $faker->randomElement($array = array ('male', 'female','other')),
                'email'=>$faker->email,
                'number'=>$faker->phoneNumber,
                'city'=>$faker->city
            ]);
        }

    }
}
