<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class articleTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('article_types')->insert([
            //admin
            [
                'type_created_by' => '003',
                'type_entity_id' => '001',
                'type_description' => 'take care of things.',
                'type_specialization' => 'Pediatrics',
                'type_sub_spec' => 'neonatal',
                'type_icon' => '',
                'type_status' => 'active'
            ],

        ]);

    }
}
