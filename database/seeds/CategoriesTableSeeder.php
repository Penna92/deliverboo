<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorieslist = ['Primi piatti', 'Secondi piatti', 'Contorni', 'Antipasti', 'Dolci', 'Bevande', 'Panini', 'Pizza', 'Piadina', 'Nigiri', 'Roll', 'Sashimi'];
        foreach ($categorieslist as $category) {
            $newCategory = new Category();

            $newCategory->name = $category;
            $newCategory->slug = Str::of($newCategory->name)->slug('-');

            $newCategory->save();
        }
    }
}
