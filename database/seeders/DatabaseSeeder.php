<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use  Faker\Factory as Faker;

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


        $faker = Faker::create();




        DB::table('users')->insert([
            'id'=> $faker->unique()->randomDigitNotNull(),
            'name'=>'Administrator',
            'email'=>'administrator@example.com',
            'email_verified_at'=>$faker->dateTimeThisMonth($max = 'now', $timezone = null),
            'password' => bcrypt('admin12345'),
            'remember_token'=>'',
            'created_at' =>$faker->dateTimeThisMonth($max = 'now', $timezone = null),
            'updated_at'=>$faker->dateTimeThisMonth($max = 'now', $timezone = null)
      ]);


        foreach(range(1,10)as $index) {


            //'first_name', 'second_name','last_name','id_number','email_address','phone_number','nationality','city','address','description'
            DB::table('borrowers')->insert([
                'id'=> $faker->unique()->randomDigitNotNull(),
                'first_name'=>$faker->firstNameMale(),
                'second_name'=>$faker->lastName(),
                'last_name'=>$faker->lastName(),
                'id_number'=>$faker->text($maxNbChars = 20),
                'email_address' =>$faker->companyEmail(),
                'phone_number' =>$faker->phoneNumber(),
                'address'=>$faker->text($maxNbChars = 100),
                'nationality' => $faker->text($maxNbChars = 20),
                'address'=>$faker->streetAddress(),
                'description'=>$faker->sentence()

            ]);
        }





    }
}
