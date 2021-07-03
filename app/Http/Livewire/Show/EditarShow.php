<?php

namespace App\Http\Livewire\Show;

use App\Models\Animal;
use App\Models\Show;
use Livewire\Component;

class EditarShow extends Component
{
    public Show $show;
    public $animais;

    protected $rules = [
        'show.nome' => 'required|string|max:255',
        'show.inicio' => 'required',
        'show.duracao' => 'required|numeric|min:0',
        'animais' => 'required'
    ];

    public function mount(Show $show)
    {
        $this->show = $show;
    }

    public function editar()
    {
        $this->validate();
        $this->show->animais()->sync($this->animais);
        $this->show->save();

        $this->redirect('/shows');
    }

    public function render()
    {
        return view('livewire.show.editar-show');
    }
}
