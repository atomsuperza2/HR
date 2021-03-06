<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AccountInfo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('birthday');
            $table->string('Gender');
            $table->string('email');
            // ->unique();
            $table->integer('phone');
            $table->string('address');
            $table->integer('employeeID');
            // $table->integer('department_id');
            // $table->integer('designation_id');
            $table->time('shiftStart');
            $table->time('shiftEnd');
            $table->date('hiredDate');
            $table->date('exitDate');
            $table->double('salary');
            // $table->integer('role_id');
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
        Schema::dropIfExists('AccountInfo');
    }
}
