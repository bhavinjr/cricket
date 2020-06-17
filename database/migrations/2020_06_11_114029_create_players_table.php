<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id');
            $table->string('first_name', 100);
            $table->string('last_name', 100)->nullable();
            $table->string('avatar_url')->nullable();
            $table->integer('jersey_number');
            $table->foreignId('country_id');
            $table->unique(['team_id', 'jersey_number']);
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
        Schema::dropIfExists('players');
    }
}
