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
        Schema::create('property_characteristics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->unique()->constrained()->onDelete('cascade');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('garage');
            $table->integer('kitchen');
            $table->integer('office');
            $table->integer('floors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_characteristics');
    }
};
