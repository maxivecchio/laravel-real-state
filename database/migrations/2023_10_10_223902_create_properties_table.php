<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('');
            $table->decimal('price', 15, 2);
            $table->string('country')->default('');
            $table->string('state')->default('');
            $table->string('city')->default('');
            $table->string('address')->default('');
            $table->integer('zipcode')->default(111);
            $table->decimal('size', 15, 2);
            $table->string('image_path')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
