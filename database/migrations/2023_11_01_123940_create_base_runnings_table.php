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
        Schema::create('base_runnings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id');
            $table->integer('out');
            $table->integer('steal');
            $table->integer('advance_base');
            $table->integer('left_on_base');
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
        Schema::dropIfExists('base_runnings');
    }
};
