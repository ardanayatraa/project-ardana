<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $tamu) {
            $tamu->increments('id');
            $tamu->string('username')->unique();
            $tamu->string('email')->unique();
            $tamu->string('nama_lengkap');
            $tamu->string('password');
            $tamu->string('address');
            $tamu->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
