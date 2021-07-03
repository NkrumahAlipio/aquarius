<?php

namespace App\Observers;

use App\Models\Treinador;

class TreinadorObserver
{

    public function deleting(Treinador $treinador)
    {
        foreach ($treinador->animais as $animal) {
            $animal->participa_em_shows = false;
            $animal->save();
        }
    }
}
