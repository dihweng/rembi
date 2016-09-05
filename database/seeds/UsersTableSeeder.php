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
            'username' => 'frontdesk',
            'password' => bcrypt('frontdesk'),
            'department' => 'frontdesk'
        ]);

        DB::table('users')->insert([
            'username' => 'account',
            'password' => bcrypt('account'),
            'department' => 'account'
        ]);

        DB::table('users')->insert([
            'username' => 'lab',
            'password' => bcrypt('lab'),
            'department' => 'lab'
        ]);

        DB::table('users')->insert([
            'username' => 'bloodbank',
            'password' => bcrypt('bloodbank'),
            'department' => 'bloodbank'
        ]);
    }
}
