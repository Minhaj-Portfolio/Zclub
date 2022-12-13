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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id('Id');  //Id
            $table->string('firstname', 60); //name
            $table->string('lastname', 60); //name
            $table->string('email', 100); //email
            $table->bigInteger('number', 13); //mobilenumber
            $table->enum('gender', ["m", "f", "o"]); //gender define m=male,f=female,o=other
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
        Schema::dropIfExists('reservation');
    }
};
