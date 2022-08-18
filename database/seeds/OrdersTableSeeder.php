<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <5; $i++) {
            $newOrder = new Order();

            $newOrder->name = $faker->firstName();
            $newOrder->surname = $faker->lastName();
            $newOrder->email = $faker->email();
            $newOrder->phone_number = $faker->phoneNumber();
            $newOrder->total_price = $faker->randomFloat(2, 1, 9999);
            $newOrder->billing_address = $faker->address();
            $newOrder->shipping_address = $faker->address();
            $newOrder->shipped = $faker->boolean();

            $newOrder->save();
        }
    }
}
