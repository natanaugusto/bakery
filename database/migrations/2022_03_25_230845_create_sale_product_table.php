<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'product_id');
            $table->foreignId(column: 'sale_id');
            $table->boolean('is_ready');
            $table->unsignedMediumInteger(column: 'amount');
            $table->softDeletes();
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
        Schema::dropIfExists('sale_product');
    }
};
