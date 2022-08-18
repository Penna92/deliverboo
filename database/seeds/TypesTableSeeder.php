<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Type;
use Illuminate\Support\Facades\DB;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('Types')->count() == 0) {

            DB::table('Types')->insert([
                [
                    'name' => 'Pizza',
                    'slug' => 'pizza',
                    'background_color' => '#ADC965',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Sushi',
                    'slug' => 'sushi',
                    'background_color' => '#89D5C9',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Dessert',
                    'slug' => 'dessert',
                    'background_color' => '#FAC172',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Poke',
                    'slug' => 'poke',
                    'background_color' => '#FF8357',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Gelato',
                    'slug' => 'gelato',
                    'background_color' => '#E25B45',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Hamburger',
                    'slug' => 'hamburger',
                    'background_color' => '#FABE0E',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Kebab',
                    'slug' => 'kekab',
                    'background_color' => '#f5c6b2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Sandwich',
                    'slug' => 'sandwich',
                    'background_color' => '#aae6da',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Americano',
                    'slug' => 'americano',
                    'background_color' => '#e0966f',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Italiano',
                    'slug' => 'italiano',
                    'background_color' => '#49888a',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Cinese',
                    'slug' => 'cinese',
                    'background_color' => '#b68141',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Giapponese',
                    'slug' => 'giapponese',
                    'background_color' => '#f8b2bc',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);
        } else {
            echo "Table is not empty";
        }
    }
}
