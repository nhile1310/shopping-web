<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_details_table', function (Blueprint $table) {
            $table->id();
            $table->integer('id_bill');
            $table->integer('id_product');
            $table->integer('quantity');
            $table->double('unit_price');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');

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
        Schema::dropIfExists('bill_details_table');
    }
}
