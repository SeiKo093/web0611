<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class SeederTest extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = "carlitos";
       // $user->lastname = "carlongas";
        $user->email = "test@gmail.com";
        $user->password = "123";

        $user->save();




    }
}
