<?php

namespace Database\Seeders;

use App\Models\Vehiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehiculo::create([
        'placa' => 'AQM-025',
        'marca' => 'Toyota',
        'modelo' => 'Tercel',
        'anio_fabricacion' => 1998,
        'cliente_id' => 1
    ]);
    }
}
