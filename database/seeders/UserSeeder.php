<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = config('users');
        foreach ($data as $d){
            $newUser = new User();
            $newUser->name = $d['name'];
            $newUser->lastname = $d['lastname'];
            $newUser->email = $d['email'];
            $newUser->password = 'training';
            $newUser->save();
        }
    }
}
