<?php

namespace App\Http\Livewire\Planta;

use App\Models\Especie;
use App\Models\Planta;
use Livewire\Component;

class CriarPlanta extends Component
{

    public planta $planta;
    public Especie $especie;

    protected $rules = [
        'especie.nome' => 'required|string|max:255',
        'especie.familia' => 'required|string|max:255',
        'especie.habitat' => 'required|string',
        'planta.numero' => 'required|numeric',
        'planta.profunda' => 'required|boolean'
    ];

    public function mount()
    {
        $this->planta = new Planta();
        $this->especie = new Especie();

        $this->planta->fill([
            'profunda' => false
        ]);
    }

    public function criar()
    {
        $this->validate();
        $this->especie->save();
        $this->planta
            ->fill(['especie_id' => $this->especie->id])
            ->save();
        $this->redirect('/plantas');
    }

    public function render()
    {
        return view('livewire.planta.criar-planta');
    }
}
