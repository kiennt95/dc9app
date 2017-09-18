<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'id'        => 1,
            'name'      => 'Quản trị',
            'status'    => 1,
        ]);

        DB::table('groups')->insert([
            'id'        => 2,
            'name'      => 'kinh doanh',
            'status'    => 1,
        ]);

        DB::table('groups')->insert([
            'id'        => 3,
            'name'      => 'Khách hàng',
            'status'    => 1,
        ]);

        DB::table('groups')->insert([
            'id'        => 4,
            'name'      => 'Vận chuyển',
            'status'    => 1,
        ]);
    }
}
