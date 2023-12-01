<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = config('orders');
        $pivotCount = 1;
        foreach ($data as $order) {
            $newOrder = new Order();

            $newOrder->name = $order['name'];
            $newOrder->lastname = $order['lastname'];
            $newOrder->address = $order['address'];
            $newOrder->phone = $order['phone'];
            $newOrder->status = $order['status'];
            $newOrder->totalprice = $order['totalprice'];
            $newOrder->save();

            $dishesToSync = [];
            for ($i = $pivotCount; $i < $pivotCount + 4; $i += 2) {
                $dishesToSync[$i] = ['quantity' => rand(1, 5)];
            }
            $newOrder->dishes()->sync($dishesToSync);

            $pivotCount += 4;
        }
    }
}
