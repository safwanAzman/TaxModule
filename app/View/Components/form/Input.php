<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class Input extends Component
{
    public $label;
    public $value;
    public $type;
    public $livewire = '';

    public function __construct($label, $value, $type = "text", $livewire)
    {
        $this->label    = $label;
        $this->value    = $value;
        $this->type     = $type;
        $this->livewire = $livewire;
    }

    public function render()
    {
        return view('components.form.input');
    }
}
