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
        ]);
        
        DB::table('users')->insert([
            'username' => 'account',
            'password' => bcrypt('account'),
        ]);
    }
}
