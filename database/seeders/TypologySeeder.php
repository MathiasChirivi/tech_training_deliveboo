<?php

namespace Database\Seeders;

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

        foreach ($data as $typology){

            $newTypology = new Typology();

            $newTypology->name = $typology;
            $newTypology->save();
        }
    }
}
