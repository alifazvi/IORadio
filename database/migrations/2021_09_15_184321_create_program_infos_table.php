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
            $table->id();
            $table->boolean('public')->default(0);
            $table->unsignedBigInteger('user_id');
            $table->string('stripe_id')->nullable();
            $table->string('week')->nullable();
            $table->string('time')->nullable();
            $table->string('program_name')->nullable();
            $table->string('program_photo')->nullable();
            $table->string('program_detail')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
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
