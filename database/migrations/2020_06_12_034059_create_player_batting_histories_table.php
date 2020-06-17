<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerBattingHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_batting_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id');
            $table->tinyInteger('match_type')
                    ->default(1)
                    ->comment('1=Test, 2=ODI, 3=T20');

            $table->integer('matches');
            $table->integer('innings');
            $table->integer('runs')->default(0);
            $table->integer('highest')->default(0);
            $table->integer('not_outs')->default(0);
            $table->integer('fifties')->default(0);
            $table->integer('hundreds')->default(0);
            $table->integer('fours')->default(0);
            $table->integer('sixes')->default(0);
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
        Schema::dropIfExists('player_batting_histories');
    }
}
