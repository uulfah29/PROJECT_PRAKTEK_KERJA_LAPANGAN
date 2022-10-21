<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LpjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lpjs')->insert([
            'namaorganisasi' => 'UKM Seni',
            'kegiatan' => 'Dies Natalis',
            'lpj' => '',
        ]);
    }
}
