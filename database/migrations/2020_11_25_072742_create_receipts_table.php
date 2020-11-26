<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('invoice_id')->nullable();
            $table->string('payment_mod', 16, 2)->nullable();

            $table->string('document_no')->nullable();

            $table->unsignedBigInteger('bank_id')->nullable();
            $table->string('check_no')->nullable();
            $table->datetime('check_date')->nullable();
            
            $table->unsignedDecimal('amount_paid', 16, 2)->default(0);
            $table->unsignedDecimal('total_amount', 16, 2)->default(0);
            $table->unsignedDecimal('balance_return', 16, 2)->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipts');
    }
}
