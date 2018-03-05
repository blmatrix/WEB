<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i <= 10; $i++) {
            $posts[$i] = [
                'title' => $faker->word,
                'content' => $faker->sentence,
                'author' => $faker->name($gender = null|'male'|'female'),
                'draft' => $faker->boolean($chanceOfGettingTrue = 50)
            ];}

            DB::table('posts')
              ->insert($posts);
    }
}
