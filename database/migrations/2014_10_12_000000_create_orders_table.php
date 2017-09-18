<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name',50);
        //$table->integer('service_id')->default(0)->comment('Dịch vụ');
        $table->integer('user_id')->default(0)->comment('ID nhân viên kinh doanh');
        //$table->integer('unit')->default(0)->comment('Đơn vị tính kg, đôi, chiếc, thùng, bộ...');
        $table->char('content')->default(0)->comment(' Ghi chú = đơn hàng được tạo ngày XXXX Khối lượng*đơn giá ');
        $table->integer('status')->comment('Đang chờ duyệt 0, Đã duyệt 1, chờ lấy hàng 2, đã lấy hàng 3, đã nhận hàng 4, đã trả hàng 6  ')->default(0);
        $table->integer('deleted_by')->comment('deleted user id')->nullable();
        $table->integer('created_by')->comment('created user id (user id khách hàng)')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
