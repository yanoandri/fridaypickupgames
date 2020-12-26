<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMatch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id('match_id');
            $table->foreignId('home_team');
            $table->foreignId('away_team');
            $table->integer('home_score');
            $table->integer('away_score');
            $table->integer('queue');
            $table->date('schedule_date');
            $table->boolean('is_finished');
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
        Schema::dropIfExists('table_match');
    }
}
