<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    /** @use HasFactory<\Database\Factories\VehiculoFactory> */
    use HasFactory;

    protected $fillable = [
        'plate_number',
        'brand',
        'model',
        'vehicle_type',
        'color',
        'capacity',
        'daily_rate',
        'status',
    ];
}
