<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::firstOrCreate([
            'documento' => '71080140'
        ], [
            'nombre' => 'Sandro',
            'apellidos' => 'Cordova',
            'email' => 'sandro@example.com',
            'telefono' => '923323888'
        ]);
    }
}
