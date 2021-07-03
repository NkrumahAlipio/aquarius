<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SideBarItem extends Component
{

    public $titulo;
    public $link;
    public $icone;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo, $link,$icone)
    {
        $this->titulo = $titulo;
        $this->icone = $icone;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.side-bar-item');
    }
}
