<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'apellidos',
        'documento',
        'email',
        'telefono',
    ];

     protected $casts = [
        'nombre' => 'string',
        'apellidos' => 'string',
        'documento' => 'string',
        'email' => 'string',
        'telefono' => 'string',
    ];

    public function vehiculos()
    {
        return $this->hasMany(Vehiculo::class);
    }
}
