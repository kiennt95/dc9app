<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username'      => 'admin',
            'email'         => 'admin@gmail.com',
            'first_name'    => 'Lee',
            'last_name'     => 'Quan',
            'group_id'      => 1,
            'gender'        => 1,
            'phone'         => '0978849286',
            'birthday'      => '1987-12-12',
            'status'        => 1,
            'password'      => \Illuminate\Support\Facades\Hash::make('password', [ 'rounds' => 12 ]),
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'username'      => 'khachhang',
            'email'         => 'khachhang@gmail.com',
            'first_name'    => 'Khách',
            'last_name'     => 'Hàng',
            'group_id'      => 2,
            'gender'        => 1,
            'phone'         => '0978849286',
            'birthday'      => '1987-12-12',
            'status'        => 1,
            'password'      => \Illuminate\Support\Facades\Hash::make('password', [ 'rounds' => 12 ]),
            'remember_token' => str_random(10),
        ]);

        DB::table('users')->insert([
            'username'      => 'vanchuyen',
            'email'         => 'vanchuyen@gmail.com',
            'first_name'    => 'Vận',
            'last_name'     => 'Chuyển',
            'group_id'      => 3,
            'gender'        => 1,
            'phone'         => '0978849286',
            'birthday'      => '1987-12-12',
            'status'        => 1,
            'password'      => \Illuminate\Support\Facades\Hash::make('password', [ 'rounds' => 12 ]),
            'remember_token' => str_random(10),
        ]);

        factory(App\model\Users::class, 6)->create();
    }
}
