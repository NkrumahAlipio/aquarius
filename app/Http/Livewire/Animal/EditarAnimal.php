<?php

namespace App\Http\Livewire\Animal;

use App\Models\Animal;
use App\Models\Especie;
use App\Models\Treinador;
use Livewire\Component;

class EditarAnimal extends Component
{

    public Especie $especie;
    public Animal $animal;
    public $participados;
    public $participa;

    protected $rules = [
        'especie.nome' => 'required|string|max:255',
        'especie.familia' => 'required|string|max:255',
        'especie.habitat' => 'required|string',
        'animal.nome' => 'required|string|max:255',
        'animal.idade' => 'required|numeric|min:0',
        'animal.cativeiro' => 'required',
        'animal.participa_em_shows' => 'required',
        'animal.experiencia' => 'nullable|required_if:animal.participa_em_shows,true|min:0|lt:animal.idade',
        'animal.treinador_id' => 'nullable|required_if:animal.participa_em_shows,true',
    ];

    public function editar()
    {
        $this->validate();
        $this->especie->save();
        $this->animal->save();
        $this->redirect('/animais');
    }

    public function mount(Animal $animal, Especie $especie)
    {
        $this->animal = $animal;
        $this->especie = $especie;
        $this->participados = count($animal->shows);
        $this->participa = $animal->participa_em_shows;
    }

    public function render()
    {
        return view('livewire.animal.editar-animal');
    }
}
