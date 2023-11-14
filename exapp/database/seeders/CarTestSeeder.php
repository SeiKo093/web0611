<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarTestModel;


class CarTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $carritos = [
            ['name' => 'Trocon', 'description' => 'camaron', 'year'=> 2020],
            ['name' => 'Trocon2', 'description' => 'camaronaso', 'year'=> 2022],
            ['name' => 'Bochon', 'description' => 'Bochito', 'year'=> 1990],
            ['name' => 'Camioneton', 'description' => 'Mamastroso', 'year'=> 2029],
        ];

        foreach ($carritos as $carroData){
            $carro = new CarTestModel();

            $carro ->name = $carroData['name'];
            $carro ->description = $carroData['description'];
            $carro ->year = $carroData['year'];

            $carro ->save();
        }

    }
}
