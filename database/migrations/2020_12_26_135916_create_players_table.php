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
            $table->id('player_id');
            $table->char('full_name', 120);
            $table->char('nick_name', 120);
            $table->char('email', 100);
            $table->char('phone_number', 40);
            $table->longText('home_address');
            $table->longText('work_address');
            $table->char('position', 20);
            $table->char('alt_position', 20);
            $table->date('birth_date');
            $table->char('from_universities', 120);
            $table->year('class_year');
            $table->char('back_number', 3);
            $table->decimal('height_in_centimeter', 8, 2);
            $table->decimal('weight_in_kilogram', 8, 2);
            $table->softDeletes($column = 'deleted_at', $precision = 0);
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
