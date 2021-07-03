<?php

namespace App\Http\Livewire\Animal;

use App\Models\Animal;
use App\Models\Especie;
use Livewire\Component;

class CriarAnimal extends Component
{
    public Animal $animal;
    public Especie $especie;

    protected $rules = [
        'especie.nome' => 'required|string|max:255',
        'especie.familia' => 'required|string|max:255',
        'especie.habitat' => 'required|string|max:255',
        'animal.nome' => 'required|string|max:255',
        'animal.idade' => 'required|numeric|min:0',
        'animal.cativeiro' => 'required|boolean',
        'animal.participa_em_shows' => 'required|boolean',
        'animal.experiencia' => 'nullable|required_if:animal.participa_em_shows,true|min:0|lt:animal.idade',
        'animal.treinador_id' => 'nullable|required_if:animal.participa_em_shows,true'
    ];

    public function mount()
    {
        $this->animal = new Animal();
        $this->especie = new Especie();

        $this->animal->fill([
            'cativeiro' => false,
            'participa_em_shows' => false
        ]);
    }

    public function criar()
    {
        $this->validate();
        $this->especie->save();
        $this->animal
            ->fill([
                'especie_id' => $this->especie->id,
                'experiencia' => $this->especie->experiencia ? $this->especie->experiencia : null,
                'treinador_id' => $this->especie->treinador_id ? $this->especie->treinador_id : null
            ])
            ->save();
        $this->redirect('/animais');
    }

    public function render()
    {
        return view('livewire.animal.criar-animal');
    }
}
