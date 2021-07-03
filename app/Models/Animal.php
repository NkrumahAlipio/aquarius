<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'cativeiro' => 'boolean',
        'participa_em_shows' => 'boolean',
    ];

    public function especie()
    {
        return $this->belongsTo(Especie::class);
    }

    public function shows()
    {
        return $this->belongsToMany(Show::class);
    }

    public function treinador()
    {
        return $this->belongsTo(Treinador::class);
    }
}
