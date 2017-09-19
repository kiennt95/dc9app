<?php

use Illuminate\Database\Seeder;

class VoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vote')->insert([
            'id'            => 1,
            'order_id'      => 1,
            'user_id'       => 3,
            'vote'          => 3,
        ]);
    }
}
