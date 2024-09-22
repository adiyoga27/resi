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
        Schema::create('sub_expeditions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('expedition_id');
            $table->foreign('expedition_id')->references('id')->on('expeditions');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_expeditions');
    }
};
