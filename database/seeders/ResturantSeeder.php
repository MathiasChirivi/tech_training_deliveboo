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


        $resturants = config('resturant.resturants');

        foreach ($resturants as $resturant) {
            $newResturant = new Resturant();

            $newResturant->user_id = $resturant['user_id'];
            $newResturant->name = $resturant['name'];
            $newResturant->address = $resturant['address'];
            $newResturant->piva = $resturant['piva'];
            $newResturant->photo = $resturant['photo'];
            
            $newResturant->save();
        }
    }
}
