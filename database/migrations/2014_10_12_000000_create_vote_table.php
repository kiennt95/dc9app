<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('order_id')->default(0);
        $table->integer('vote')->default(0);
        $table->integer('deleted_by')->comment('deleted user id')->nullable();
        $table->integer('created_by')->comment('created user id')->nullable();
        $table->integer('updated_by')->comment('updated user id')->nullable();
        $table->rememberToken();
        $table->softDeletes();
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
        Schema::dropIfExists('groups');
    }
}
