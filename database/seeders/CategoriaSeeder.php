<?php

namespace Database\Seeders;

use App\Models\Categorias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categorias::create(['descripcion'=>"Tecnologia",'estado'=>1]);
        Categorias::create(['descripcion'=>"Celulares",'estado'=>1]);
        Categorias::create(['descripcion'=>"Laptops",'estado'=>1]);
        Categorias::create(['descripcion'=>"Televisores",'estado'=>1]);
    }
}
