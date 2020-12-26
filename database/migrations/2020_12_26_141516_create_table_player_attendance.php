<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePlayerAttendance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_attendances', function (Blueprint $table) {
            $table->id('attendance_id');
            $table->foreignId('player_id');
            $table->date('date_attendance');
            $table->char('attendance_time', 5);
            $table->char('remarks', 100);
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
        Schema::dropIfExists('table_player_attendance');
    }
}
