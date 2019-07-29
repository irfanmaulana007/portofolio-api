<?php

use Illuminate\Database\Seeder;

class profileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profile')->insert([
            'fullname' => 'Irfan Maulana',
            'email' => 'irfanmaulana695@gmail.com',
            'country' => 'indonesia',
            'city' => 'dki jakarta',
            'job' => 'fullstack developer',
            'company' => 'PT. Semut Merah Informatika',
            'dob' => '1997/03/15'
        ]);
    }
}
