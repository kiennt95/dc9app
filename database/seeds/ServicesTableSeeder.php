<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Đơn vị tính | 1:kg, 2: Thùng/Chai, 3: Đôi, 4 Bộ
        DB::table('services')->insert([
            'id'        => 1,
            'name'      => 'Giặt Đồ',
            'price'     => 1000,
            'unit'      => 1,
            'status'    => 1,
        ]);

        DB::table('services')->insert([
            'id'        => 2,
            'name'      => 'Nước uống',
            'price'     => 2000,
            'unit'      => 2,
            'status'    => 1,
        ]);

        DB::table('services')->insert([
            'id'        => 3,
            'name'      => 'Dép',
            'price'     => 3000,
            'unit'      => 3,
            'status'    => 1,
        ]);

        DB::table('services')->insert([
            'id'        => 4,
            'name'      => 'Quần áo',
            'price'     => 4000,
            'unit'      => 4,
            'status'    => 1,
        ]);
    }
}
