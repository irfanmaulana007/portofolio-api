<?php

use Illuminate\Database\Seeder;

class projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'name' => 'Bonzzano',
            'description' => 'Convection',
            'image' => '',
            'date' => '2016/08/01',
        ]);

        DB::table('projects')->insert([
            'name' => 'Laundry Chuy',
            'description' => 'Laundry Online',
            'image' => 'laundrychuy.jpg',
            'date' => '2017/04/18',
        ]);

        DB::table('projects')->insert([
            'name' => 'Pickpack',
            'description' => 'Pickpack Site',
            'image' => 'pickpack.png',
            'date' => '2017/08/01',
        ]);

        DB::table('projects')->insert([
            'name' => 'T-Force',
            'description' => 'Toyota Astra Motor Forecasting System',
            'image' => 't-force.png',
            'date' => '2018/10/01',
        ]);

        DB::table('projects')->insert([
            'name' => 'Braon Store',
            'description' => 'Online Store',
            'image' => 'braonstore.jpg',
            'date' => '2019/03/25',
        ]);

        DB::table('projects')->insert([
            'name' => 'Indo Kordsa',
            'description' => 'Synchronize System',
            'image' => 'indokordsa.jpeg',
            'date' => '2019/07/17',
        ]);
    }
}
