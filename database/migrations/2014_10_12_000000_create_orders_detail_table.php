<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_detail', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('service_id')->default(0)->comment('ID nhân viên kinh doanh');
        $table->integer('unit')->default(0)->comment('Đơn vị tính kg, đôi, chiếc, thùng, bộ...');
        $table->integer('status')->comment('Active 1 ; Inactive 0')->default(0);
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
        Schema::dropIfExists('orders_detail');
    }
}
