<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;


class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('donations', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('name')->nullable();
//            $table->string('stripe_id')->nullable();
//            $table->unsignedBigInteger('program_id');
//            $table->foreign('program_id')->references('id')->on('program_infos');
//            $table->integer('amount')->nullable();
//            $table->string('message')->nullable();
//            $table->string('mail_address')->nullable();
//            $table->string('status')->nullable();
//            $table->timestamps();
//        });


//
//        DB::table('roles')->insert([
//            ['id' => 1,'name' => 'admin','guard_name' => 'web','created_at' => Carbon::now(), "updated_at"=>Carbon::now() ],
//            ['id' => 2,'name' => 'user','guard_name' => 'web','created_at' => Carbon::now(), "updated_at"=>Carbon::now()  ],
//
//        ]);
//        DB::table('users')->insert([
//            ['id' => 1, "name"=>"Asim Sattar", "email" => "admin@mail.com", "password" => '$2y$10$yhWwkYYJnaAid4GPuev56ubU3m3/v3lz0sHhy3zOLiZs5mK.qg5mC',  'created_at' => Carbon::now(), "updated_at" => Carbon::now()],
//        ]);
//
//        DB::table('model_has_roles')->insert([
//            ['role_id' => 1, 'model_type' => 'App\Models\User', 'model_id' => 1],
//        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donations');


    }
}
