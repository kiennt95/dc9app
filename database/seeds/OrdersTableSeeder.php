<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'id'            => 1,
            'name'          => 'Giặt quần áo cho cậu',
            'unit'          => 2,
            'service_id'    => 1,
            'user_id'       => 3,
            'content'        => 'Dịch vụ giặt là 2kg/ giá 900k',
        ]);


    }
}
