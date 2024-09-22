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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('noinvoice');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->string('customer_name');
            $table->string('customer_province');
            $table->string('customer_city');
            $table->string('customer_subdistrict');
            $table->string('customer_address');
            $table->string('expedition');
            $table->string('payment_method');
            $table->dateTime('paid_at');
            $table->decimal('sub_total');
            $table->decimal('ongkir');
            $table->decimal('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
