<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id')->comment('Id của dịch vụ');
            $table->string('name',50);
            $table->integer('price')->comment('Đơn giá (VNĐ) / 1 Đơn vị')->default(0);
            $table->integer('unit')->comment('Đơn vị tính | 1:kg, 2: Thùng/Chai, 3: Đôi, 4 Bộ ')->default(1);
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
        Schema::dropIfExists('services');
    }
}
