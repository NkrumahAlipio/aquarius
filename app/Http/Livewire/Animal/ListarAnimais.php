<?php

namespace App\Http\Livewire\Animal;

use App\Http\Traits\Listar;
use App\Models\Animal;
use Livewire\Component;

class ListarAnimais extends Component
{
    use Listar;
    public $animais;

    public function mount($animais)
    {
        $this->animais = $animais;
    }

    public function apagarAnimal($id)
    {
        $this->animais = $this->apagar(Animal::class, $this->animais, $id);
    }

    public function render()
    {
        return view('livewire.animal.listar-animais');
    }
}
