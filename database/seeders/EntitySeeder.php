<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     * $table->string('ent_created_by')->nullable();
      *      $table->string('ent_name')->nullable(); // active,inactive
      *      $table->string('ent_acro')->nullable(); // entity title
      *      $table->text('ent_description')->nullable(); // entity description
     */
    public function run(): void
    {
        //create data for Entities Indexing and publishers
        DB::table('entities')->insert([
            //first entry
            [
                'ent_created_by' => 'admin',
                'ent_id'=> 'INDEX01',
                'ent_type' => 'index',
                'ent_name' => 'Health Research and Development Network',
                'ent_acro' => 'HERDIN-Plus',
                'ent_description' => 'Description for  herdin',
                'ent_url' => 'https://www.herdin.ph/',
                'ent_status' => 'active',
            ],
            [
                'ent_created_by' => 'admin',
                'ent_id'=> 'INDEX02',
                'ent_type' => 'index',
                'ent_name' => 'ASEAN Citation Index ',
                'ent_acro' => 'ACI',
                'ent_description' => 'Description for  ASEAN Citation Index ',
                'ent_url' => 'https://asean-cites.org/',
                'ent_status' => 'active',
            ],
            [
                'ent_created_by' => 'admin',
                'ent_id'=> 'INDEX03',
                'ent_type' => 'index',
                'ent_name' => 'Directory of Open Access Journals',
                'ent_acro' => 'DOAJ',
                'ent_description' => 'Description for  DOAJ',
                'ent_url' => 'https://doaj.org/',
                'ent_status' => 'active',
            ],
            [
                'ent_created_by' => 'admin',
                'ent_id'=> 'INDEX04',
                'ent_type' => 'index',
                'ent_name' => 'Western Pacific Region Index Medicus',
                'ent_acro' => 'WPRIM',
                'ent_description' => 'Description for  WPRIM',
                'ent_url' => 'http://www.wprim.org//',
                'ent_status' => 'active',
            ],
            [
                'ent_created_by' => 'admin',
                'ent_id'=> 'PUB01',
                'ent_type' => 'publisher',
                'ent_name' => 'PubMed by the US National Library of Medicine',
                'ent_acro' => '',
                'ent_description' => 'Description for Pubmed',
                'ent_url' => '',
                'ent_status' => 'active',
            ],
            [
                'ent_created_by' => 'admin',
                'ent_id'=> 'PUB02',
                'ent_type' => 'publisher',
                'ent_name' => 'Elsevier’s Scopus',
                'ent_acro' => '',
                'ent_description' => 'Description for Elsevier’s Scopus',
                'ent_url' => '',
                'ent_status' => 'active',
            ],
            [
                'ent_created_by' => 'admin',
                'ent_id'=> 'PUB03',
                'ent_type' => 'publisher',
                'ent_name' => 'Thomson Reuters ISI',
                'ent_acro' => 'ISI',
                'ent_description' => 'Description for Thomson Reuters ISI',
                'ent_url' => '',
                'ent_status' => 'active',
            ],
            [
                'ent_created_by' => 'admin',
                'ent_id'=> 'PUB04',
                'ent_type' => 'publisher',
                'ent_name' => 'University of the East Ramon Magsaysay Memorial Medical Center, Inc',
                'ent_acro' => 'UERMMMC',
                'ent_description' => 'Description for University of the East Ramon Magsaysay Memorial Medical Center, Inc',
                'ent_url' => '',
                'ent_status' => 'active',
            ],

        ]);
    }
}
