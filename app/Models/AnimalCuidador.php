<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class AnimalCuidador extends Model
{
    protected $fillable = [
        'cuidador_id',
        'animal_id',
    ];

    public function animal()
    {
        return $this->belongsTo('App\Models\Animal', 'animal_id');
    }

    public function cuidador()
    {
        return $this->belongsTo('App\Models\Cuidador', 'cuidador_id');
    }
}
