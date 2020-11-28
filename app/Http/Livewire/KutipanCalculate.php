<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Bank;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Receipt;

class KutipanCalculate extends Component
{
    public  $banks;
    public  $search = '';
    public  $transaction_details;
    public  $invoice_show;
    public  $invoice_process;
    public  $payment_mode, 
    $document_no, $bank_id, $check_no, $check_date, $paid_amount = 0.00 ,
    $confirm_document_no, $confirm_bank_id, $confirm_check_no, $confirm_check_date, $confirm_paid_amount = 0.00 ,
    $balance_amount = 0.00, $receipt_group;

    public function mount(){
        $this->banks = Bank::all();
    }

    public function render(){
        $rsearch = $this->search;
        if( strlen($rsearch) > 0 ){
            $rsearch = $this->search.'%';
        }

        $this->invoice_process   = Invoice::where('status', 1)-> get();
        $this->balance_amount    = $this->confirm_paid_amount - round($this->invoice_process->sum('total_paid_amount'), 2);
        
    
        return view('livewire.kutipan-calculate',[
            'invoice_search'    => Invoice::where('status', 0)
                                -> where('bil_no', 'like',  $rsearch)
                                -> get(),
            'receipts'          => Receipt::whereRAW('DATEDIFF(D, created_at, GETDATE()) = 0')->get(),
        ]);
    }

    public function chooseCategory($category = ''){
        $this->search = $category;
        $this->invoice_show         = NULL;
    }

    public function showInvoice($invoice_id = ''){
        $this->invoice_show = Invoice::where('id', $invoice_id)->first();
    }

    public function addInvoice($invoice_id = ''){
        Invoice::where('id', $invoice_id)->update([
            'status' => 1,
            'updated_at' => date("Y-m-d h:i:sa"),
        ]);
    }

    public function deleteInvoice($invoice_id = ''){
        Invoice::where('id', $invoice_id)->update([
            'status' => 0,
            'updated_at' => date("Y-m-d h:i:sa"),
        ]);
    }

    public function setPaymentMode($payment_mode){
        $this->payment_mode         = $payment_mode;
        if ($payment_mode == 'KAD KREDIT'){
            $this->confirm_paid_amount  = round($this->invoice_process->sum('total_paid_amount'), 2);
        }else{
            $this->confirm_paid_amount  = 0.00;
        }
        $this->confirm_document_no  = NULL;
        $this->confirm_bank_id      = NULL;
        $this->confirm_check_no     = NULL;
        $this->confirm_check_date   = NULL;
        $this->document_no          = NULL;
        $this->bank_id              = NULL;
        $this->check_no             = NULL;
        $this->check_date           = NULL;
        $this->paid_amount          = 0.00;
    }

    public function confirmPayment($document_no, $bank_id, $check_no, $check_date, $paid_amount){
        $this->confirm_document_no  = $document_no;
        $this->confirm_bank_id      = $bank_id;
        $this->confirm_check_no     = $check_no;
        $this->confirm_check_date   = $check_date;
        $this->confirm_paid_amount  = $paid_amount;
    }

    public function payment(){
        if( $this->balance_amount < 0 ){
            $this->dispatchBrowserEvent('swal', [
                'icon'              => 'error',
                'title'             => 'Transaksi Gagal!',
                'showConfirmButton' => true,
            ]);
        }else{
            $this->receipt_group = Receipt::all()->max('receipt_group')+1;
            
            foreach($this->invoice_process as $invoice){
                $invoice->update([
                    'status' => 2,
                    'updated_at' => date("Y-m-d h:i:sa"),
                ]);

                $receipt = Receipt::create([
                    'receipt_group' => $this->receipt_group,
                    'invoice_id'    => $invoice->id,
                    'payment_mod'   => $this->payment_mode          == '' ? NULL : $this->payment_mode,
                    'document_no'   => $this->confirm_document_no   == '' ? NULL : $this->confirm_document_no,
                    'bank_id'       => $this->confirm_bank_id       == '' ? NULL : $this->confirm_bank_id,
                    'check_no'      => $this->confirm_check_no      == '' ? NULL : $this->confirm_check_no,
                    'check_date'    => $this->confirm_check_date    == '' ? NULL : $this->confirm_check_date,
                    'amount_paid'   => $this->confirm_paid_amount   == '' ? 0    : $this->confirm_paid_amount,
                    'total_amount'  => $invoice->total_paid_amount,
                    'balance_return'=> $this->balance_amount        == '' ? 0    : $this->balance_amount,
                    'created_at'    => date("Y-m-d h:i:sa"),
                ]);

                $receipt->update([
                    'receipt_no' => date('Y').str_pad(date('m'), 2, '0', STR_PAD_LEFT).str_pad($receipt->id, 5, '0', STR_PAD_LEFT),
                ]);
            }
            $this->transaction_details = Receipt::where('receipt_group', $this->receipt_group)->get();

            $this->confirm_document_no  = NULL;
            $this->confirm_bank_id      = NULL;
            $this->confirm_check_no     = NULL;
            $this->confirm_check_date   = NULL;
            $this->document_no          = NULL;
            $this->bank_id              = NULL;
            $this->check_no             = NULL;
            $this->check_date           = NULL;
            $this->paid_amount          = 0.00;
            $this->confirm_paid_amount  = 0.00;
            $this->payment_mode         = NULL;

            $this->dispatchBrowserEvent('swal', [
                'icon'              => 'success',
                'title'             => 'Transaksi Berjaya!',
                'showConfirmButton' => true,
            ]);
        }
    }

    public function refresh(){
        $this->search = "";
        $this->payment_mode         = NULL;
        $this->confirm_document_no  = NULL;
        $this->confirm_bank_id      = NULL;
        $this->confirm_check_no     = NULL;
        $this->confirm_check_date   = NULL;
        $this->document_no          = NULL;
        $this->bank_id              = NULL;
        $this->check_no             = NULL;
        $this->check_date           = NULL;
        $this->paid_amount          = 0.00;
        $this->receipt_group        = 0;
        $this->transaction_details  = NULL;
        $this->invoice_show         = NULL;
    }
}
