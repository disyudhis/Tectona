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
        Schema::create('inventories', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('product_id')->nullable()->references('id')->on('products');
            $table->string('code')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('status')->default('AVAILABLE')->nullable();
            $table->string('intensity')->nullable();
            $table->foreignUuid('slot_id')->nullable()->references('id')->on('rack_slots');
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
        Schema::dropIfExists('inventories');
    }
};
