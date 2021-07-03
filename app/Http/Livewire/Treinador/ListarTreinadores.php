<?php

namespace App\Http\Livewire\Treinador;

use App\Http\Traits\Listar;
use App\Models\Treinador;
use Livewire\Component;

class ListarTreinadores extends Component
{
    use Listar;

    public $treinadores;

    public function mount($treinadores)
    {
        $this->treinadores = $treinadores;
    }

    public function apagarTreinador($id)
    {
        $this->treinadores = $this->apagar(Treinador::class, $this->treinadores, $id);
    }

    public function render()
    {
        return view('livewire.treinador.listar-treinadores');
    }
}
