<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proposals')->insert([
            'nmaorganisasi' => 'UKM Seni',
            'kegiatan' => 'Dies Natalis',
            'proposal' => '',
        ]);
    }
}
