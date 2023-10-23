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
            $table->unsignedBigInteger('home_team_id');
            $table->unsignedBigInteger('home_team_score')->default(0);
            $table->unsignedBigInteger('away_team_id');
            $table->unsignedBigInteger('away_team_score')->default(0);
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
