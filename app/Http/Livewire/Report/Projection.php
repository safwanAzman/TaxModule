<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;

use Livewire\WithPagination;

use App\Models\Invoice;

class Projection extends Component
{
    use WithPagination;

    public $on = 0;

    public function render()
    {
        if($this->on == 1){
            $this->dispatchBrowserEvent('swal', [
                'icon'              => 'success',
                'title'             => 'Success Generate!',
                'showConfirmButton' => false,
                'timer'             => 1500,
            ]);
        }
        return view('livewire.report.projection', [
            'projections' => 
            $this->on == 0 ? NULL :
            Invoice::whereRaw("business_type in ('CUKAI', 'LESEN')")->orderby('bil_date')->paginate(10),
        ]);
    }

    public function project(){
        $this->on == 0 ? $this->on = 1 : $this->on = 0;
    }
}
