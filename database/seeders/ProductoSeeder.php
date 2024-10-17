<?php

namespace Database\Seeders;

use App\Models\Productos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Productos::create(
            ['descripcion'=>'mouse',
            'cantidad'=>30,
            'precio'=>30.6,
            'estado'=>1,
            'idcategoria'=>1,
        ]);
    }
}
