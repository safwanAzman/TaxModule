<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class ModalContent extends Component
{
     public $title;
    public function __construct($title)
    {
       $this->title = $title;
    }

    
    public function render()
    {
        return view('components.general.modal-content');
    }
}
