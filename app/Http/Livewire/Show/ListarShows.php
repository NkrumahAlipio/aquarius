<?php

namespace App\Http\Livewire\Show;

use App\Http\Traits\Listar;
use App\Models\Show;
use Livewire\Component;

class ListarShows extends Component
{
    use Listar;

    public $shows;

    public function mount($shows)
    {
        $this->shows = $shows;
    }

    public function apagarShow($id)
    {
        $this->shows = $this->apagar(Show::class, $this->shows, $id);
    }

    public function render()
    {
        return view('livewire.show.listar-shows');
    }
}
