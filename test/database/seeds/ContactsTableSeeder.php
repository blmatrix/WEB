<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i <= 1; $i++) {
            $contacts[$i] = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'number' => $faker->randomNumber($nbDigits = NULL, $strict = false),
                'address' => $faker->address
            ];}

            DB::table('contacts')
              ->insert($contacts);
    }
}
