<?php

namespace App\Http\Livewire\Kutipan\Resit;

use Livewire\Component;
use App\Models\Receipt;
use Livewire\WithPagination;
class SenaraiResit extends Component
{
    use WithPagination;

    public $search_date = "0";
    public $transaction_details;

    public function render(){
        return view('livewire.kutipan.resit.senarai-resit',[
            'transactions'  => Receipt::selectRaw("receipt_group,min(receipt_no) as min,max(receipt_no) as max,payment_mod,amount_paid,sum(total_amount) as total,balance_return")
                            -> whereRaw("DATEDIFF(D,created_at,GETDATE()) <= $this->search_date")
                            -> groupBy('receipt_group','payment_mod','amount_paid','balance_return')
                            -> orderBy('receipt_group', 'desc')
                            -> paginate(5),
        ]);
    }

    public function transactionDetail($receipt_group = 0){
        $this->transaction_details = Receipt::where('receipt_group', $receipt_group)->get();
    }
}
