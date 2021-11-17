<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('stripe_id')->nullable();

            $table->integer('time_slot_id')->unsigned()->nullable();
            $table->string('program_name')->nullable();
            $table->string('program_photo')->nullable();
            $table->string('program_detail')->nullable();
            $table->tinyInteger('is_publish')->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('time_slot_id')->references('id')->on('time_slots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_infos');
    }
}
