<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id('stat_id');
            $table->foreignId('player_attendance_id');
            $table->foreignId('team_id');
            $table->foreignId('match_id');
            $table->integer('score');
            $table->integer('score_attempt');
            $table->integer('three_point_score');
            $table->integer('three_point_attempt_score');
            $table->integer('assists');
            $table->integer('steal');
            $table->integer('block');
            $table->integer('turnover');
            $table->integer('offensive_rebound');
            $table->integer('defensive_rebound');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_stats');
    }
}
