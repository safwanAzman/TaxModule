<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class ModalContent extends Component
{
    public $title;
    public $modalActive;
    
    public function __construct($title,$modalActive)
    {
       $this->title = $title;
       $this->modalActive = $modalActive;
    }

    
    public function render()
    {
        return view('components.general.modal-content');
    }
}
