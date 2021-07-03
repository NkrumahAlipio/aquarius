<?php

namespace App\Http\Livewire\Planta;

use App\Models\Especie;
use App\Models\Planta;
use Livewire\Component;

class EditarPlanta extends Component
{

    public Especie $especie;
    public Planta $planta;

    protected $rules = [
        'especie.nome' => 'required|string|max:255',
        'especie.familia' => 'required|string|max:255',
        'especie.habitat' => 'required|string',
        'planta.numero' => 'required|numeric',
        'planta.profunda' => 'required|boolean'
    ];

    public function editar()
    {
        $this->validate();
        $this->especie->save();
        $this->planta->save();
        $this->redirect('/plantas');
    }

    public function mount(Planta $planta, Especie $especie)
    {
        $this->planta = $planta;
        $this->especie = $especie;
    }

    public function render()
    {
        return view('livewire.planta.editar-planta');
    }
}
