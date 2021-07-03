<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    use HasFactory;

    protected $casts = [
        'profunda' => 'boolean'
    ];

    protected $guarded = [];

    public function especie()
    {
        return $this->belongsTo(Especie::class);
    }
}
