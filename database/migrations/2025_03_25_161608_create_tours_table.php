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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('desripction');
            $table->string('location', 255);
            $table->decimal('latidude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->string('category', 50)->nullable();
            $table->integer('price')->nullable();
            $table->time('opening_hours')->nullable();
            $table->time('closing_hours')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('created_at')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
