<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable();
            $table->text('about')->nullable();
            $table->integer('price');
            $table->unsignedBigInteger('category_id');
           
            $table->boolean('is_popular')->default(false);
            $table->integer('stock')->default(0);
            $table->integer('duration')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('service_categories')->onDelete('cascade');
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};