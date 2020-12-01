<?php

namespace App\View\Components\sidebar;

use Illuminate\View\Component;

class NavItem extends Component
{
    public $title;
    public $route;

    public function __construct($title,$route)
    {
       $this->title = $title;
       $this->route = $route;
    }

   
    public function render()
    {
        return view('components.sidebar.nav-item');
    }
}
