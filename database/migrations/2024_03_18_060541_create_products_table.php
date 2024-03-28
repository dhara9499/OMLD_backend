<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('unique_number', 255)->unique();
            $table->integer('qty');
            $table->double('land_price');
            $table->double('selling_price');
            $table->integer('discount_type')->comment('0 - percentage, 1 - amount');
            $table->double('discount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
