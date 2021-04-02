<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderMaterials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrderMaterials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shop_name');
            $table->string('contact_person');
            $table->string('phone_contact_person');
            $table->string('order_number');
            $table->text('address');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('material_name');
            $table->text('detail');
            $table->double('quantity');
            $table->double('price');
            $table->double('discount');
            $table->double('vat');
            $table->double('sum_materials');
            $table->double('sum_proce');
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
        Schema::dropIfExists('OrderMaterials');
    }
}
