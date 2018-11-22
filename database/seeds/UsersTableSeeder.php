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
            'name' => 'Hoang The Anh',
            'email' => 'anhdepzai@gmail.com',
            'password' => bcrypt('123456'),
            'type' => 2,
        ]);
        DB::table('users')->insert([
            'name' => 'Ho Minh Khoi',
            'email' => 'khoingu@gmail.com',
            'password' => bcrypt('123456'),
            'type' => 2,
        ]);
    }
}
