<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Irfan Maulana',
            'email' => 'irfanmaulana695@gmail.com',
            'username' => 'irfanmaulana007',
            'password' => bcrypt('password'),
        ]);
    }
}
