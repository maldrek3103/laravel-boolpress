<?php

use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $post = new Post();

            $post->title = $faker->text(50);
            $post->content = $faker->paragraph(20, true);
            $post->image = $faker->imageUrl(250, 250);
            $post->slug = Str::slug($post->title, '-');

            $post->save();
        }
    }
}
