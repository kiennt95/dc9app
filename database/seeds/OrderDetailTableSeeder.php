<?php

use Illuminate\Database\Seeder;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders_detail')->insert([
            'id'            => 1,
            'service_id'    => 1,
            'number'          => 1
        ]);

        DB::table('orders_detail')->insert([
            'id'            => 2,
            'service_id'    => 3,
            'number'          => 1
        ]);
    }
}
