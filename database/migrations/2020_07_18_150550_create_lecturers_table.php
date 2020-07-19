<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Fname');
            $table->string('Lname');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('subdomain');
            
            $table->string('bio');
            $table->string('gender')->default('Prefer Not To Say');
            $table->string('contact');
            $table->string('photo')->default('profile.png');
            $table->rememberToken();
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
        Schema::dropIfExists('lecturers');
    }
}
