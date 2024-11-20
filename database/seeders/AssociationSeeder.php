<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AssociationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('associations')->insert([
            //first entry
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'entity', //user org or entity
                'association_id'=>'INDEX01', //index and publisher
                'association_role'=>'ref' // Editorial, USER role in the Journal
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'entity',
                'association_id'=>'INDEX02', //index and publisher
                'association_role'=>'ref'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'entity',
                'association_id'=>'INDEX03', //index and publisher
                'association_role'=>'ref'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'entity',
                'association_id'=>'INDEX04', //index and publisher
                'association_role'=>'ref'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'entity',
                'association_id'=>'PUBL01', //index and publisher
                'association_role'=>'ref'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'user',
                'association_id'=>'USER20', //index and publisher
                'association_role'=>'Editor in Chief'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'user',
                'association_id'=>'USER27', //index and publisher
                'association_role'=>'Associate Editor'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'user',
                'association_id'=>'USER28', //index and publisher
                'association_role'=>'Associate Editor'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'user',
                'association_id'=>'USER29', //index and publisher
                'association_role'=>'Associate Editor'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'user',
                'association_id'=>'USER30', //index and publisher
                'association_role'=>'Associate Editor'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'user',
                'association_id'=>'USER31', //index and publisher
                'association_role'=>'Associate Editor'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'user',
                'association_id'=>'USER32', //index and publisher
                'association_role'=>'Associate Editor'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'user',
                'association_id'=>'USER34', //index and publisher
                'association_role'=>'Managing Editor'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'user',
                'association_id'=>'USER35', //index and publisher
                'association_role'=>'Editorial Advisory Board'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'user',
                'association_id'=>'USER36', //index and publisher
                'association_role'=>'Editorial Advisory Board'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'user',
                'association_id'=>'USER37', //index and publisher
                'association_role'=>'Editorial Advisory Board'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'user',
                'association_id'=>'USER38', //index and publisher
                'association_role'=>'Editorial Advisory Board'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'user',
                'association_id'=>'USER39', //index and publisher
                'association_role'=>'Editorial Advisory Board'
            ],
            [
                'association_journal'=>'JOURNAL01', //This is the ID used for query
                'association_source'=>'user',
                'association_id'=>'USER26', //index and publisher
                'association_role'=>'Editorial Assistant'
            ],
        ]);
    }
}
