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
            'role_id' => '1',
            'name' => 'Admin-Leandro',
            'email' => 'admin@chef.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
