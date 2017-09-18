<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Kiểu 1: cửa hàng, 2: khách hàng, 3: Vận chuyển
        DB::table('locations')->insert([
            'id'        => 1,
            'name'      => 'Cửa hàng giặt đồ',
            'address'   => 'Địa chỉ 1',
            'mobile'   => '0978849286',
            'type'      => 1,
            'status'    => 1,
        ]);

        DB::table('locations')->insert([
            'id'        => 2,
            'name'      => 'Khách sạn HHHH',
            'address'   => 'Địa chỉ 2',
            'mobile'   => '0978849286',
            'type'      => 2,
            'status'    => 1,
        ]);

        DB::table('locations')->insert([
            'id'        => 3,
            'name'      => 'Vận chuyển',
            'address'   => 'Địa chỉ 3',
            'mobile'   => '0978849286',
            'type'      => 3,
            'status'    => 1,
        ]);
    }
}
