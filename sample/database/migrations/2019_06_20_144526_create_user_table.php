<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
           $table->text('content');
            $table->string('title');
            $table->timestamps();
            $table->rememberToken();
            /*
            $table->bigInteger('schoolid');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('sex');
            $table->text('xueyuan');
            $table->text('zhuanye');
            $table->integer('shifouhuiyuan');


            */

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
