<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerBowlingHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_bowling_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id');
            $table->tinyInteger('match_type')
                    ->default(1)
                    ->comment('1=Test, 2=ODI, 3=T20');

            $table->integer('matches');
            $table->integer('innings');
            $table->integer('wickets');
            $table->integer('five_wickets');
            $table->integer('ten_wickets')->default(0);
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
        Schema::dropIfExists('player_bowling_histories');
    }
}
