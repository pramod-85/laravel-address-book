<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('person_name', 191);
            $table->string('person_number', 15)->unsigned();
            $table->string('address_line_1', 191);
            $table->string('address_line_2', 191);
            $table->string('address_line_3', 191);
            $table->integer('pincode')->unsigned();
            $table->string('city', 191);
            $table->string('state', 191);
            $table->string('country', 191);
            $table->enum('default_to', ['no', 'yes']);
            $table->enum('default_from', ['no', 'yes']);
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
        Schema::dropIfExists('contacts');
    }
}
