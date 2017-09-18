<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id')->comment('Id Menu');
            $table->string('name',50)->comment('Tên menu');
            $table->integer('parent_id')->comment('Id menu cha')->default(0);
            $table->char('link_api')->comment(' Link gọi tới API ')->default(1);
            $table->char('group_id')->comment('Id của Group , mặc định bằng 0 hiển thị cho tất cả các nhóm ')->default(0);
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
        Schema::dropIfExists('menu');
    }
}
