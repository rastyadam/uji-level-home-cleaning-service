<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name'); // pemesan
            $table->string('phone');
            $table->string('email');
            $table->integer('quantity');
            $table->integer('sub_total_amount');
            $table->integer('grand_total_amount');
            $table->integer('discount_amount')->default(0);
            $table->unsignedBigInteger('promo_code_id')->nullable();
            $table->unsignedBigInteger('service_id');
            $table->text('address');
            $table->string('post_code');
            $table->string('city');
            $table->boolean('is_paid')->default(false);
            $table->string('booking_code')->unique();
            $table->string('proof')->nullable(); // bukti pembayaran
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('promo_code_id')->references('id')->on('promo_codes')->onDelete('set null');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_transactions');
    }
};