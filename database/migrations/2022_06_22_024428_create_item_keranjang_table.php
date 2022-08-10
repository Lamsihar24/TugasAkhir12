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
        Schema::create('item_keranjang', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('keranjang_id')->unsigned();
            $table->bigInteger('produk_id')->unsigned();
            $table->bigInteger('toko_id')->unsigned();
            $table->string('status',250)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->string('created_by',250)->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('updated_by',250)->nullable();

            $table->foreign('keranjang_id')->references('id')->on('keranjang');
            $table->foreign('produk_id')->references('id')->on('produk');
            $table->foreign('toko_id')->references('id')->on('toko');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_keranjang');
    }
};
