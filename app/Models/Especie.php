<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    public function isAnimal()
    {
        return isset($this->animal);
    }

    public function isPlanta()
    {
        return isset($this->planta);
    }

    public function animal()
    {
        return $this->hasOne(Animal::class);
    }

    public function planta()
    {
        return $this->hasOne(Planta::class);
    }
}
