<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 15, 2);
            $table->string('address');
            $table->string('country');
            $table->integer('zipcode');
            $table->string('state');
            $table->integer('kitchen')->default(0);
            $table->integer('bedroom')->default(0);
            $table->integer('bathroom')->default(0);
            $table->integer('office')->default(0);
            $table->integer('garage')->default(0);
            $table->integer('floors')->default(0);
            $table->decimal('size', 15, 2);
            $table->string('image_path')->nullable();
            $table->unsignedBigInteger('owner_id');
            $table->unsignedBigInteger('status_id');
            $table->timestamps();
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
