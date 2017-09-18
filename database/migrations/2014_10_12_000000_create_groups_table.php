<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
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
        $table->string('username',50);
        $table->string('password',255);
        $table->string('email')->unique();
        $table->integer('role')->comment('role: admin 1, kinh doanh 2, khach hang 3, van chuyen 4');
        $table->integer('group_id')->comment('Group admin');
        $table->string('first_name',30);
        $table->string('last_name',30);
        $table->string('phone',16);
        $table->date('birthday');
        $table->tinyInteger('gender');
        $table->integer('status')->comment('Active 1 ; Inactive 0 ');
        $table->string('avatar',255)->default('avatar/no-avatar.png')->comment('url arvatar, default no avatar ');
        $table->integer('deleted_by')->comment('deleted user id');
        $table->integer('created_by')->comment('created user id');
        $table->integer('updated_by')->comment('updated user id');
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
        Schema::dropIfExists('users');
    }
}
