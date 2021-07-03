<?php

namespace App\Observers;

use App\Models\Animal;

class AnimalObserver
{

    public function updating(Animal $animal)
    {
        if ($animal->getOriginal('participa_em_shows') && !$animal->participa_em_shows) {
            $animal->treinador_id = null;
            $animal->experiencia = null;
            foreach ($animal->shows as $show) {
                $show->animais()->detach($animal);
                if (count($show->animais) == 0)
                    $show->delete();
            }
        }
    }

    public function deleting(Animal $animal)
    {
        $animal
            ->shows
            ->each(function ($show) {
                $show->animais()->detach($animal);
                count($show->animais) == 0 ?? $show->delete();
            });
    }
}
