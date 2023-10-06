<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyCharacteristicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
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
            $table->boolean('has_laundry_room')->default(false);
            $table->boolean('has_dining_room')->default(false);
            $table->boolean('has_game_room')->default(false);
            $table->boolean('has_home_office')->default(false);
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
}

