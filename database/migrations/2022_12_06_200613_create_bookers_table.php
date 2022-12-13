<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookers', function (Blueprint $table) {
            $table->id('booker_id'); //booker_id
            $table->string('firstname', 60); //firstname
            $table->string('lastname', 60); //lastname
            $table->string('email', 100); //email
            $table->integer('number'); //mobilenumber
            $table->enum('gender', ["m", "f", "o"]); //gender define m=male,f=female,o=other
            $table->timestamps();  //updated_at created_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookers');
    }
};
