<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location', function (Blueprint $table) {
            $table->increments('id')->comment('Id id cửa hàng');
            $table->string('name',50)->comment('Tên cửa hàng');
            $table->integer('type')->comment('Kiểu 1: cửa hàng, 2: khách hàng, 3: Vận chuyển')->default(0);
            $table->char('address')->comment('Địa chỉ')->nullable();
            $table->char('mobile',16)->comment('mobile')->nullable();
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
