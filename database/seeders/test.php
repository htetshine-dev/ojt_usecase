<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test')->insert([
            'name' => 'Test',
            'email' => 'test@gmail.com'
        ]);
    }
}
