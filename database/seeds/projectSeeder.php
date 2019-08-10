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
            'name' => 'Portofolio',
            'description' => 'Irfan Maulana\'s Portofolio',
            'image' => '',
            'date' => '2019/03/15',
        ]);

        DB::table('projects')->insert([
            'name' => 'Portofolio2',
            'description' => 'Irfan Maulana\'s Portofolio',
            'image' => '',
            'date' => '2019/03/15',
        ]);
    }
}
