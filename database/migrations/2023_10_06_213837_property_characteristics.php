<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('property_characteristics', function (Blueprint $table) {
            
            // Ambientes
            $table->integer('living_room')->default(0);
            $table->integer('kitchen')->default(0);
            $table->integer('bedroom')->default(0);
            $table->integer('bathroom')->default(0);
            $table->integer('office')->default(0);
            $table->boolean('has_garage')->default(false);
            $table->integer('floors')->nullable();
        });
    }

    /**
     * Reverse the migrations.  
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_characteristics');
    }
};
