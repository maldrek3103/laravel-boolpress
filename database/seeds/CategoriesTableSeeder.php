<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_names = ['HTML', 'PHP', 'JS', 'CSS', 'VueJS', 'Laravel'];

        foreach ($category_names as $name) {
            $category = new Category();
            $category->name = $name;
            $category->slug = Str::slug($name, '-');

            $category->save();
        }
    }
}
