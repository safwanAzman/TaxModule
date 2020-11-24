<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class BasicForm extends Component
{
    public $action;

    public function __construct($action)
    {
        $this->action = $action;
    }

    public function render()
    {
        return view('components.form.basic-form');
    }
}
