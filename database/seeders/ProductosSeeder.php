<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Producto::create(['nombre' => 'Joya_1', 'cantidad' => 10, 'precio' => 250.00]);
        \App\Models\Producto::create(['nombre' => 'Joya_2', 'cantidad' => 2, 'precio' => 99.99]);
        \App\Models\Producto::create(['nombre' => 'Joya_3', 'cantidad' => 5, 'precio' => 150.70]);
        \App\Models\Producto::create(['nombre' => 'Joya_4', 'cantidad' => 14, 'precio' => 755.90]);
        \App\Models\Producto::create(['nombre' => 'Joya_5', 'cantidad' => 9, 'precio' => 299.00]);
    }
}
