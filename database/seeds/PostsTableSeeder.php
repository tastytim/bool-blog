<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){

        for ($i=0; $i < 10; $i++) { 
            $newPost = new Post();
            $newPost->title = $faker->sentence(6);
            $newPost->subtitle = $faker->sentence(4);
            $newPost->content = $faker->realText(1000);
            $newPost->author = $faker->firstNameFemale;
            $newPost->coverImg = $faker->imageUrl(null, null, 'food');
            $newPost->category = $faker->word();

            
        }
        
    }
}
