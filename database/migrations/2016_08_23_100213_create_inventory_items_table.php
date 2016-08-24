<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('unit_price');
            $table->string('department');
            $table->integer('stock');
            $table->integer('critical_level');
            $table->string('manufacturer');
            $table->date('manufacture_date');
            $table->date('expiry_date');
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
        Schema::drop('inventory_items');
    }
}
