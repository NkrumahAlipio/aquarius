<?php

namespace App\Http\Livewire\Treinador;

use App\Models\Treinador;
use Livewire\Component;

class EditarTreinador extends Component
{

    public Treinador $treinador;

    protected $rules = [
        'treinador.nome' => 'required|string|max:255',
        'treinador.idade' => 'required|numeric|min:18',
        'treinador.genero' => 'required|string',
        'treinador.experiencia' => 'required|numeric|min:0|lt:treinador.idade'
    ];

    public function mount(Treinador $treinador)
    {
        $this->treinador = $treinador;
    }

    public function editar()
    {
        $this->validate();
        $this->treinador->save();
        $this->redirect('/treinadores');
    }

    public function render()
    {
        return view('livewire.treinador.editar-treinador');
    }
}
