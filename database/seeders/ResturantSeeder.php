<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resturant;
use Illuminate\Support\Facades\Schema;


class ResturantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::disableForeignKeyConstraints();
        Resturant::truncate();
        Schema::enableForeignKeyConstraints();


        $resturants = config('users');
        $count = 1;

        foreach ($resturants as $resturant) {
            $newResturant = new Resturant();

            $newResturant->user_id = $count;
            $newResturant->name = $resturant['rest_name'];
            $newResturant->address = $resturant['rest_address'];
            $newResturant->piva = $resturant['rest_piva'];
            $newResturant->photo = $resturant['rest_photo'];
            $count++;

            $newResturant->save();
        }
    }
}
