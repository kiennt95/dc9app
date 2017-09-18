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
        $table->integer('group_id')->default(0)->comment('Group admin');
        $table->integer('location_id')->comment('Id cửa hàng')->nullable();
        $table->string('first_name',30);
        $table->string('last_name',30);
        $table->string('phone',16)->nullable();
        $table->date('birthday')->nullable();
        $table->tinyInteger('gender')->nullable()->comment('Nam 1 ; Nữ 2');
        $table->integer('status')->comment('Active 1 ; Inactive 0 ')->default(0);
        $table->string('avatar',255)->default('avatar/no-avatar.png')->comment('url arvatar, default no avatar ');
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
        Schema::dropIfExists('users');
    }
}
