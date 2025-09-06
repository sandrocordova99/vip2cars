<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehiculo extends Model
{
   use HasFactory;

    protected $table = 'vehiculos';

    protected $fillable = [
        'placa',
        'marca',
        'modelo',
        'anio_fabricacion',
        'cliente_id',
    ];

    protected $casts = [
        'placa' => 'string',
        'marca' => 'string',
        'modelo' => 'string',
        'anio_fabricacion' => 'integer',
        'cliente_id' => 'integer',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
