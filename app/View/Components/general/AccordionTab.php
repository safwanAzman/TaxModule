<?php

namespace App\View\Components\general;

use Illuminate\View\Component;

class AccordionTab extends Component
{
    public $title;
    public $accordionActive;

    public function __construct($title,$accordionActive)
    {
       $this->title = $title;
       $this->accordionActive = $accordionActive;
    }

   
    public function render()
    {
        return view('components.general.accordion-tab');
    }
}
