<?php

namespace App\Http\Livewire\Planta;

use App\Http\Traits\Listar;
use App\Models\Animal;
use App\Models\Planta;
use Livewire\Component;

class ListarPlantas extends Component
{
    use Listar;
    public $plantas;

    public function mount($plantas)
    {
        $this->plantas = $plantas;
    }

    public function apagarPlanta($id)
    {
        $this->plantas = $this->apagar(Planta::class, $this->plantas, $id);
    }

    public function render()
    {
        return view('livewire.planta.listar-plantas');
    }
}
