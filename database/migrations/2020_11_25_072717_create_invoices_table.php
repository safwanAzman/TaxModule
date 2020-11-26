<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->string('customer_name')->default('Hashim Hassan');
            $table->string('customer_ic')->default('701219101001');
            $table->string('customer_address1')->default('No. 11, Jalan 9/6');
            $table->string('customer_address2')->nullable();
            $table->string('customer_address3')->nullable();
            $table->string('customer_postcode')->default('43650');
            $table->string('customer_town')->default('Bandar Baru Bangi');
            $table->string('customer_state')->default('Selangor');
            $table->string('company_name')->default('Creative System Consultant Sdn Bhd');
            $table->string('company_address1')->default('No. 11, Jalan 9/6');
            $table->string('company_address2')->nullable();
            $table->string('company_address3')->nullable();
            $table->string('company_postcode')->default('43650');
            $table->string('company_town')->default('Bandar Baru Bangi');
            $table->string('company_state')->default('Selangor');
            $table->date('bil_date')->nullable();
            $table->string('bil_no')->nullable();
            $table->integer('duration_month_start')->nullable();
            $table->integer('duration_month_end')->nullable();
            $table->integer('duration_year')->nullable();
            
            $table->string('old_account_no')->nullable();
            $table->string('account_no')->nullable();

            $table->string('mukim')->nullable();
            $table->string('lot_no')->nullable();
            $table->string('ownership_no')->nullable();
            
            $table->string('business_type')->nullable();
            $table->unsignedDecimal('total_bil_amount', 16, 2)->nullable();
            $table->unsignedDecimal('total_paid_amount', 16, 2)->nullable();

            $table->smallInteger('status')->default(0);// 1 = process; 2 = done

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
        Schema::dropIfExists('invoices');
    }
}
