<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
        $table->increments('id')->comment('admin 1, kinh doanh 2, khach hang 3, van chuyen 4');
        $table->string('name',50);
        $table->integer('status')->comment('Active 1 ; Inactive 0 ')->default(0);
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
