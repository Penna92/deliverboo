<?php

use Illuminate\Database\Seeder;
use App\Restaurant;

class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('Restaurants')->count() == 0) {

            DB::table('Restaurants')->insert([
                [
                    "name" => "Moe's Tavern",
                    "slug" => "moe's-tavern",
                    "address" => "via simpson, 23",
                    "image" => "uploads/moe.png",
                    "user_id" => "1",
                    "vat_number" => "11111111111",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "name" => "The Drunken Clam",
                    "slug" => "the-drunken-clam",
                    "address" => "via griffin, 3",
                    "image" => "uploads/clam.png",
                    "user_id" => "2",
                    "vat_number" => "22222222222",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "name" => "Los Pollos Hermanos",
                    "slug" => "los-pollos-hermanos",
                    "address" => "via breaking, 6",
                    "image" => "uploads/hermanos.png",
                    "user_id" => "3",
                    "vat_number" => "33333333333",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "name" => "Gusteau's",
                    "slug" => "gusteau's",
                    "address" => "via baguette, 7",
                    "image" => "uploads/gusteaus.png",
                    "user_id" => "4",
                    "vat_number" => "44444444444",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "name" => "Panucci's Pizza",
                    "slug" => "panucci's-pizza",
                    "address" => "via futuro, 100",
                    "image" => "uploads/panucci.png",
                    "user_id" => "5",
                    "vat_number" => "55555555555",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "name" => "Trattoria Trusaldi",
                    "slug" => "trattoria-trusaldi",
                    "address" => "via Morioh, 4",
                    "image" => "uploads/trusaldi.png",
                    "user_id" => "6",
                    "vat_number" => "66666666666",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "name" => "Mc Donald",
                    "slug" => "mc-donald",
                    "address" => "via NYC, 69",
                    "image" => "uploads/donald.png",
                    "user_id" => "7",
                    "vat_number" => "77777777777",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "name" => "Burger King",
                    "slug" => "burger-king",
                    "address" => "via florida, 8",
                    "image" => "uploads/king.png",
                    "user_id" => "8",
                    "vat_number" => "88888888888",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "name" => "Ciro Kebab",
                    "slug" => "ciro-kebab",
                    "address" => "via Roma, 9",
                    "image" => "uploads/ciro.png",
                    "user_id" => "9",
                    "vat_number" => "99999999999",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "name" => "Bar Sesto",
                    "slug" => "bar-sesto",
                    "address" => "piazza buenos aires, 1",
                    "image" => "uploads/sesto.png",
                    "user_id" => "10",
                    "vat_number" => "10101010101",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "name" => "Krusty Krab",
                    "slug" => "krusty-krab",
                    "address" => "via money money, 420",
                    "image" => "uploads/krusty.png",
                    "user_id" => "11",
                    "vat_number" => "11111111112",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "name" => "Anteiku Coffee",
                    "slug" => "anteiku-coffee",
                    "address" => "via ghoul-26",
                    "image" => "uploads/anteiku.png",
                    "user_id" => "12",
                    "vat_number" => "1212121212121",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "name" => "Starbucks",
                    "slug" => "starbucks",
                    "address" => "via bad coffee, 1",
                    "image" => "uploads/starbucks.png",
                    "user_id" => "13",
                    "vat_number" => "1313131313131",
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    "name" => "Piadineria Di Agostino",
                    "slug" => "piadineria-di-agostino",
                    "address" => "via-backend, 28",
                    "image" => "uploads/agostino.png",
                    "user_id" => "14",
                    "vat_number" => "14141414141",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s")
                ],
                [
                    "name" => "Trattoria Di Alfonso",
                    "slug" => "trattoria-di-alfosno",
                    "address" => "via mafia, 47",
                    "image" => "uploads/alfonso.png",
                    "user_id" => "15",
                    "vat_number" => "15151515151",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s")
                ],
                [
                    "name" => "Sushi Chon",
                    "slug" => "sushi-chon",
                    "address" => "via mantova, 23",
                    "image" => "uploads/sushi.png",
                    "user_id" => "16",
                    "vat_number" => "16161616161",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s")
                ],
                [
                    "name" => "Pizzeria Da Francesco",
                    "slug" => "pizzeria-da-francesco",
                    "address" => "via laurina, 8",
                    "image" => "uploads/francesco.png",
                    "user_id" => "17",
                    "vat_number" => "17171717171",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s")
                ],
                [
                    "name" => "Pub Da Donato",
                    "slug" => "pub-da-donato",
                    "address" => "via ticket, 100",
                    "image" => "uploads/donato.png",
                    "user_id" => "18",
                    "vat_number" => "18181818181",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s")
                ],
                [
                    "name" => "Bisteccheria Di Giacomo",
                    "slug" => "bisteccheria-di-giacomo",
                    "address" => "via no vegan, 69",
                    "image" => "uploads/bisteccheria.png",
                    "user_id" => "19",
                    "vat_number" => "19191919191",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s")
                ],
                [
                    "name" => "Gelateria Da Fabbrizzio",
                    "slug" => "gelateria-da-fabbrizzio",
                    "address" => "via milano, 28",
                    "image" => "uploads/gelateria.png",
                    "user_id" => "20",
                    "vat_number" => "20202020202",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s")
                ],
                [
                    "name" => "Pescheria Da Greta",
                    "slug" => "pescheria-da-greta",
                    "address" => "via calamari, 38",
                    "image" => "uploads/pescheria.png",
                    "user_id" => "21",
                    "vat_number" => "21212121212",
                    "created_at" => date("Y-m-d H:i:s"),
                    "updated_at" => date("Y-m-d H:i:s")
                ],
            ]);
        }
    }
}