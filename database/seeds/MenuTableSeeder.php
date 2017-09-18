<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'id'        => 1,
            'name'      => 'Cửa hàng',
            'parent_id'     => 0,
            'link_api'     => 'api/cua-hang',
            'group_id'      => 0,
            'status'    => 1,
        ]);

        DB::table('menu')->insert([
            'id'        => 2,
            'name'      => 'Nhân viên',
            'parent_id'     => 0,
            'link_api'     => 'api/nhan-vien',
            'group_id'      => 0,
            'status'    => 1,
        ]);

        DB::table('menu')->insert([
            'id'        => 3,
            'name'      => 'Đơn hàng',
            'parent_id'     => 0,
            'link_api'     => 'api/don-hang',
            'group_id'      => 0,
            'status'    => 1,
        ]);

        DB::table('menu')->insert([
            'id'        => 4,
            'name'      => 'Dịch vụ',
            'parent_id'     => 0,
            'link_api'     => 'api/dich-vu',
            'group_id'      => 0,
            'status'    => 1,
        ]);
    }
}
