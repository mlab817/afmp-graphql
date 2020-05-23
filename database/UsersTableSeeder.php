<?php

use Illuminate\Support\Facades\DB;
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
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'user@example.com',
            'password' => bcrypt('secret'),
            'office_id' => 1
        ]);

    }
}
