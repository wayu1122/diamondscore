<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->dateTime('game_datetime');
            $table->string('location');
            $table->string('game_number');
            $table->unsignedBigInteger('bat_first_id');
            $table->unsignedBigInteger('bat_first_score')->nullable()->default(0);
            $table->unsignedBigInteger('field_first_id');
            $table->unsignedBigInteger('field_first_score')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
