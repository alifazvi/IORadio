<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Carbon\Carbon;

class CreateTimeSlotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_slots', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('day', ['SUNDAY', 'MONDAY', 'TUESDAY', 'WEDNESDAY', 'THURSDAY', 'FRIDAY', 'SATURDAY']);
            $table->string('time_from')->nullable();
            $table->string('time_to')->nullable();
            //    $table->timestamps();
        });
// 'created_at' => Carbon::now(), "updated_at" => Carbon::now()
        DB::table('time_slots')->insert([
            ['id' => 1, "day" => "SUNDAY", 'time_from' => '18:00', 'time_to' => '18:30'],
            ['id' => 2, "day" => "SUNDAY", 'time_from' => '18:30', 'time_to' => '19:00'],
            ['id' => 3, "day" => "SUNDAY", 'time_from' => '19:00', 'time_to' => '19:30'],
            ['id' => 4, "day" => "SUNDAY", 'time_from' => '19:30', 'time_to' => '20:00'],
            ['id' => 5, "day" => "SUNDAY", 'time_from' => '20:00', 'time_to' => '20:30'],
            ['id' => 6, "day" => "SUNDAY", 'time_from' => '20:30', 'time_to' => '21:00'],
            ['id' => 7, "day" => "SUNDAY", 'time_from' => '21:00', 'time_to' => '21:30'],
            ['id' => 8, "day" => "SUNDAY", 'time_from' => '21:30', 'time_to' => '22:00'],
            ['id' => 9, "day" => "SUNDAY", 'time_from' => '22:00', 'time_to' => '22:30'],
            ['id' => 10, "day" => "SUNDAY", 'time_from' => '22:30', 'time_to' => '23:00'],
            ['id' => 11, "day" => "SUNDAY", 'time_from' => '23:00', 'time_to' => '23:30'],
            ['id' => 12, "day" => "SUNDAY", 'time_from' => '23:30', 'time_to' => '24:00'],

            ['id' => 13, "day" => "MONDAY", 'time_from' => '18:00', 'time_to' => '18:30'],
            ['id' => 14, "day" => "MONDAY", 'time_from' => '18:30', 'time_to' => '19:00'],
            ['id' => 15, "day" => "MONDAY", 'time_from' => '19:00', 'time_to' => '19:30'],
            ['id' => 16, "day" => "MONDAY", 'time_from' => '19:30', 'time_to' => '20:00'],
            ['id' => 17, "day" => "MONDAY", 'time_from' => '20:00', 'time_to' => '20:30'],
            ['id' => 18, "day" => "MONDAY", 'time_from' => '20:30', 'time_to' => '21:00'],
            ['id' => 19, "day" => "MONDAY", 'time_from' => '21:00', 'time_to' => '21:30'],
            ['id' => 20, "day" => "MONDAY", 'time_from' => '21:30', 'time_to' => '22:00'],
            ['id' => 21, "day" => "MONDAY", 'time_from' => '22:00', 'time_to' => '22:30'],
            ['id' => 22, "day" => "MONDAY", 'time_from' => '22:30', 'time_to' => '23:00'],
            ['id' => 23, "day" => "MONDAY", 'time_from' => '23:00', 'time_to' => '23:30'],
            ['id' => 24, "day" => "MONDAY", 'time_from' => '23:30', 'time_to' => '24:00'],

            ['id' => 25, "day" => "TUESDAY", 'time_from' => '18:00', 'time_to' => '18:30'],
            ['id' => 26, "day" => "TUESDAY", 'time_from' => '18:30', 'time_to' => '19:00'],
            ['id' => 27, "day" => "TUESDAY", 'time_from' => '19:00', 'time_to' => '19:30'],
            ['id' => 28, "day" => "TUESDAY", 'time_from' => '19:30', 'time_to' => '20:00'],
            ['id' => 29, "day" => "TUESDAY", 'time_from' => '20:00', 'time_to' => '20:30'],
            ['id' => 30, "day" => "TUESDAY", 'time_from' => '20:30', 'time_to' => '21:00'],
            ['id' => 31, "day" => "TUESDAY", 'time_from' => '21:00', 'time_to' => '21:30'],
            ['id' => 32, "day" => "TUESDAY", 'time_from' => '21:30', 'time_to' => '22:00'],
            ['id' => 33, "day" => "TUESDAY", 'time_from' => '22:00', 'time_to' => '22:30'],
            ['id' => 34, "day" => "TUESDAY", 'time_from' => '22:30', 'time_to' => '23:00'],
            ['id' => 35, "day" => "TUESDAY", 'time_from' => '23:00', 'time_to' => '23:30'],
            ['id' => 36, "day" => "TUESDAY", 'time_from' => '23:30', 'time_to' => '24:00'],

            ['id' => 37, "day" => "WEDNESDAY", 'time_from' => '18:00', 'time_to' => '18:30'],
            ['id' => 38, "day" => "WEDNESDAY", 'time_from' => '18:30', 'time_to' => '19:00'],
            ['id' => 39, "day" => "WEDNESDAY", 'time_from' => '19:00', 'time_to' => '19:30'],
            ['id' => 40, "day" => "WEDNESDAY", 'time_from' => '19:30', 'time_to' => '20:00'],
            ['id' => 41, "day" => "WEDNESDAY", 'time_from' => '20:00', 'time_to' => '20:30'],
            ['id' => 42, "day" => "WEDNESDAY", 'time_from' => '20:30', 'time_to' => '21:00'],
            ['id' => 43, "day" => "WEDNESDAY", 'time_from' => '21:00', 'time_to' => '21:30'],
            ['id' => 44, "day" => "WEDNESDAY", 'time_from' => '21:30', 'time_to' => '22:00'],
            ['id' => 45, "day" => "WEDNESDAY", 'time_from' => '22:00', 'time_to' => '22:30'],
            ['id' => 46, "day" => "WEDNESDAY", 'time_from' => '22:30', 'time_to' => '23:00'],
            ['id' => 47, "day" => "WEDNESDAY", 'time_from' => '23:00', 'time_to' => '23:30'],
            ['id' => 48, "day" => "WEDNESDAY", 'time_from' => '23:30', 'time_to' => '24:00'],

            ['id' => 49, "day" => "THURSDAY", 'time_from' => '18:00', 'time_to' => '18:30'],
            ['id' => 50, "day" => "THURSDAY", 'time_from' => '18:30', 'time_to' => '19:00'],
            ['id' => 51, "day" => "THURSDAY", 'time_from' => '19:00', 'time_to' => '19:30'],
            ['id' => 52, "day" => "THURSDAY", 'time_from' => '19:30', 'time_to' => '20:00'],
            ['id' => 53, "day" => "THURSDAY", 'time_from' => '20:00', 'time_to' => '20:30'],
            ['id' => 54, "day" => "THURSDAY", 'time_from' => '20:30', 'time_to' => '21:00'],
            ['id' => 55, "day" => "THURSDAY", 'time_from' => '21:00', 'time_to' => '21:30'],
            ['id' => 56, "day" => "THURSDAY", 'time_from' => '21:30', 'time_to' => '22:00'],
            ['id' => 57, "day" => "THURSDAY", 'time_from' => '22:00', 'time_to' => '22:30'],
            ['id' => 58, "day" => "THURSDAY", 'time_from' => '22:30', 'time_to' => '23:00'],
            ['id' => 59, "day" => "THURSDAY", 'time_from' => '23:00', 'time_to' => '23:30'],
            ['id' => 60, "day" => "THURSDAY", 'time_from' => '23:30', 'time_to' => '24:00'],

            ['id' => 61, "day" => "FRIDAY", 'time_from' => '18:00', 'time_to' => '18:30'],
            ['id' => 62, "day" => "FRIDAY", 'time_from' => '18:30', 'time_to' => '19:00'],
            ['id' => 63, "day" => "FRIDAY", 'time_from' => '19:00', 'time_to' => '19:30'],
            ['id' => 64, "day" => "FRIDAY", 'time_from' => '19:30', 'time_to' => '20:00'],
            ['id' => 65, "day" => "FRIDAY", 'time_from' => '20:00', 'time_to' => '20:30'],
            ['id' => 66, "day" => "FRIDAY", 'time_from' => '20:30', 'time_to' => '21:00'],
            ['id' => 67, "day" => "FRIDAY", 'time_from' => '21:00', 'time_to' => '21:30'],
            ['id' => 68, "day" => "FRIDAY", 'time_from' => '21:30', 'time_to' => '22:00'],
            ['id' => 69, "day" => "FRIDAY", 'time_from' => '22:00', 'time_to' => '22:30'],
            ['id' => 70, "day" => "FRIDAY", 'time_from' => '22:30', 'time_to' => '23:00'],
            ['id' => 71, "day" => "FRIDAY", 'time_from' => '23:00', 'time_to' => '23:30'],
            ['id' => 72, "day" => "FRIDAY", 'time_from' => '23:30', 'time_to' => '24:00'],

            ['id' => 73, "day" => "SATURDAY", 'time_from' => '18:00', 'time_to' => '18:30'],
            ['id' => 74, "day" => "SATURDAY", 'time_from' => '18:30', 'time_to' => '19:00'],
            ['id' => 75, "day" => "SATURDAY", 'time_from' => '19:00', 'time_to' => '19:30'],
            ['id' => 76, "day" => "SATURDAY", 'time_from' => '19:30', 'time_to' => '20:00'],
            ['id' => 77, "day" => "SATURDAY", 'time_from' => '20:00', 'time_to' => '20:30'],
            ['id' => 78, "day" => "SATURDAY", 'time_from' => '20:30', 'time_to' => '21:00'],
            ['id' => 79, "day" => "SATURDAY", 'time_from' => '21:00', 'time_to' => '21:30'],
            ['id' => 80, "day" => "SATURDAY", 'time_from' => '21:30', 'time_to' => '22:00'],
            ['id' => 81, "day" => "SATURDAY", 'time_from' => '22:00', 'time_to' => '22:30'],
            ['id' => 82, "day" => "SATURDAY", 'time_from' => '22:30', 'time_to' => '23:00'],
            ['id' => 83, "day" => "SATURDAY", 'time_from' => '23:00', 'time_to' => '23:30'],
            ['id' => 84, "day" => "SATURDAY", 'time_from' => '23:30', 'time_to' => '24:00'],
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_slots');
    }
}
