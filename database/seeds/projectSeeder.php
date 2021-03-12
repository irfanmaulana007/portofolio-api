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
            'link' => ''
        ]);

        DB::table('projects')->insert([
            'name' => 'Laundry Chuy',
            'description' => 'Laundry Online',
            'image' => 'laundrychuy.jpg',
            'date' => '2017/04/18',
            'link' => ''
        ]);

        DB::table('projects')->insert([
            'name' => 'Pickpack',
            'description' => 'Pickpack Site',
            'image' => 'pickpack.png',
            'date' => '2017/08/01',
            'link' => 'https://www.pickpack.id/'
        ]);

        DB::table('projects')->insert([
            'name' => 'T-Force',
            'description' => 'Toyota Astra Motor Forecasting System',
            'image' => 't-force.png',
            'date' => '2018/10/01',
            'link' => ''
        ]);

        DB::table('projects')->insert([
            'name' => 'Braon Store',
            'description' => 'Online Store',
            'image' => 'braonstore.jpg',
            'date' => '2019/03/25',
            'link' => 'https://www.braonstore.id'
        ]);

        DB::table('projects')->insert([
            'name' => 'Indo Kordsa',
            'description' => 'Synchronize System',
            'image' => 'indokordsa.jpeg',
            'date' => '2019/07/17',
            'link' => ''
        ]);

        DB::table('projects')->insert([
            'name' => 'Pertamina',
            'description' => 'Power BI',
            'image' => 'pertamina.jpg',
            'date' => '2019/12/01',
            'link' => ''
        ]);

        DB::table('projects')->insert([
            'name' => 'KK Group System',
            'description' => 'POS, Inventory & Reporting System',
            'image' => 'kkgroup.svg',
            'date' => '2020/10/01',
            'link' => 'https://simagis.id'
        ]);

        DB::table('projects')->insert([
            'name' => 'Unikgoods',
            'description' => 'E-commerce',
            'image' => '',
            'date' => '2020/12/01',
            'link' => 'https://unikgoods.com'
        ]);
    }
}
