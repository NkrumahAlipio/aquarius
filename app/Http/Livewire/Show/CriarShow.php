<?php

namespace App\Http\Livewire\Show;

use App\Models\Animal;
use App\Models\Show;
use Livewire\Component;

class CriarShow extends Component
{

    public Show $show;
    public $animais;

    protected $rules = [
        'show.nome' => 'required|string|max:255',
        'show.inicio' => 'required',
        'show.duracao' => 'required|numeric|min:0',
        'animais' => 'required'
    ];

    public function mount()
    {
        $this->show = new Show();
    }

    public function criar()
    {
        $this->validate();
        $this->show->save();
        $this->show->animais()->sync($this->animais);
        $this->redirect('/shows');
    }

    public function render()
    {
        return view('livewire.show.criar-show');
    }
}
