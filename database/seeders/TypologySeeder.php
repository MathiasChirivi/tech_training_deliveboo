<?php

namespace Database\Seeders;

use App\Models\Resturant;
use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('typologies');
        $users = config('users');

        foreach ($data as $typology){

            $newTypology = new Typology();

            $newTypology->name = $typology;
            $newTypology->save();
        }

        foreach ($users as $user) {
            $typosList = [];
            foreach ($user['typologies'] as $typo) {
                $ourType = Typology::where('name', $typo)->first();
                $typosList[] = $ourType->id;
            }
            $ourResturant = Resturant::where('piva', $user['rest_piva'])->first();
            $ourResturant->typologies()->attach($typosList);
        }

    }
}
