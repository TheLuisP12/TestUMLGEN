<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Recinto extends Model
{
    protected $fillable = [
        'nombre',
        'capacidad',
        'clima',
    ];

    public function animalrecintos()
    {
        return $this->hasMany('App\Models\AnimalRecinto', 'receinto_id');
    }
}