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
        Schema::create('cleaning_rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('room_count');              // jumlah ruang yang dibersihkan, misal 1,2,3
            $table->integer('price');                   // harga untuk jumlah ruang tsb
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cleaning_rooms');
    }
};
