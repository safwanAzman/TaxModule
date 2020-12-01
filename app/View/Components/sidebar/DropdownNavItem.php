<?php

namespace App\View\Components\sidebar;

use Illuminate\View\Component;

class DropdownNavItem extends Component
{
    public $active;
    public $title;
    
    public function __construct($title,$active)
    {
       $this->active = $active;
       $this->title = $title;
    }

   
    public function render()
    {
        return view('components.sidebar.dropdown-nav-item');
    }
}
