<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function detail(){
        return $this->hasMany('App\Models\InvoiceDetail', 'invoice_id' , 'id');
    }

    public function receipt(){
        return $this->hasMany('App\Models\Receipt', 'invoice_id' , 'id');
    }
}
