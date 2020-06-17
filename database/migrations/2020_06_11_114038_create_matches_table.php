<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('match_type')
                    ->default(1)
                    ->comment('1=Test, 2=ODI, 3=T20');
            $table->foreignId('team_1')
                ->constrained('teams')
                ->comment('Host team');

            $table->foreignId('team_2')
                ->constrained('teams')
                ->comment('Visitor team');

            $table->date('match_date');
            $table->time('match_time');
            $table->foreignId('venue_id');

            $table->foreignId('toss_winner')
                ->nullable()
                ->constrained('teams');

            $table->tinyInteger('win_type')
                ->comment('1=BY RUN, 2=BY WICKETS 3=DRAW 4=NO RESULT');

            $table->foreignId('match_winner')
                    ->nullable()
                    ->constrained('teams');

            $table->tinyInteger('margin')->default(0);
            $table->foreignId('man_of_the_match')
                ->nullable()
                ->constrained('players');
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
        Schema::dropIfExists('matches');
    }
}
