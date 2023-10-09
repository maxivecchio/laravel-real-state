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
            $table->string('type')->default('');
            $table->decimal('price', 15, 2);
            $table->string('country')->default('');
            $table->string('state')->default('');
            $table->string('city')->default('');
            $table->string('address')->default('');
            $table->integer('zipcode')->default(111);
            $table->integer('kitchen')->default(0);
            $table->integer('bedroom')->default(0);
            $table->integer('bathroom')->default(0);
            $table->integer('office')->default(0);
            $table->integer('garage')->default(0);
            $table->integer('floors')->default(0);
            $table->decimal('size', 15, 2);
            $table->string('image_path')->nullable();
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->unsignedBigInteger('status_id')->nullable();
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
