<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CpCatalog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('CP')->insert([
            ['d_asenta'=>'ahdk'],
            ['d_asenta'=>'123456'],
            ['d_asenta'=>'qwerty']
        ]);
    }
}
