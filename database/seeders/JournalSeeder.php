<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *       $table->string('journal_id')->nullable();
     *       $table->string('journal_created_by')->nullable();
     *       $table->string('journal_type')->nullable(); // editorial_team=Contacts, Indexing, publisher,
     *       $table->string('journal_value')->nullable();//name of entity or name of contact
     *       $table->string('journal_group')->nullable();//group for contacts
     */
    public function run(): void
    {
        // data for journal
        DB::table('journals')->insert([
            //first entry
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'Ms. April Christine E. Dagame',
                'journal_group' => 'chief_editor',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00002',
                'journal_type' => 'contact',
                'journal_value' => 'Erlinda Castro-Palaganas PhD,RN',
                'journal_group' => 'chief_editor',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'José Florencio F. Lapeña, Jr. MA, MD',
                'journal_group' => 'editorial_assistant',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'CHRISTOPHER MALORRE E. CALAQUIAN, MD',
                'journal_group' => 'associate_editors',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'RYNER JOSE C. CARRILLO, MD, MSC',
                'journal_group' => 'associate_editors',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'SAMANTHA R. SORIANO-CASTAÑEDA, MD',
                'journal_group' => 'associate_editors',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'ANTONIO H. CHUA, MD',
                'journal_group' => 'associate_editors',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'RODANTE A. ROLDAN, MD',
                'journal_group' => 'associate_editors',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'MARIFEE U. REYES, MD',
                'journal_group' => 'associate_editors',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'FILIPINA T. CEVALLOS-SCHNABEL, MD, DNP',
                'journal_group' => 'associate_editors',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'JOSE M. ACUIN, MD, MSc',
                'journal_group' => 'editorial_advisory_board',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'ROBERT G. BERKOWITZ, MBBS, MD',
                'journal_group' => 'editorial_advisory_board',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'CHARLOTTE M. CHIONG, MD, PhD',
                'journal_group' => 'editorial_advisory_board',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'JOSE ANGELITO U. HARDILLO, MD, PhD',
                'journal_group' => 'editorial_advisory_board',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'KJ LEE, MD',
                'journal_group' => 'editorial_advisory_board',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'ERASMO GONZALO DV. LLANES, MD',
                'journal_group' => 'managing_editor',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'contact',
                'journal_value' => 'APRIL CHRISTINE E. DAGAME',
                'journal_group' => 'editorial_assistant',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'indexing',
                'journal_value' => 'Health Research and Development Network (HERDIN-Plus)',
                'journal_group' => '',
                'journal_link' => '<a href="httpo://www.test.com" >Health Research and Development Network</a>', //link text here for the form
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00001',
                'journal_type' => 'indexing',
                'journal_value' => 'ASEAN Citation Index',
                'journal_group' => '',
                'journal_link' => '<a href="httpo://www.aci.com" >ASEAN Citation Index</a>',
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00003',
                'journal_type' => 'publisher',
                'journal_value' => 'PubMed by the US National Library of Medicine',
                'journal_group' => '',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00003',
                'journal_type' => 'publisher',
                'journal_value' => 'Elseviers Scopus',
                'journal_group' => '',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00003',
                'journal_type' => 'publisher',
                'journal_value' => 'Thomson Reuters ISI',
                'journal_group' => '',
                'journal_link' => ''
            ],
            [
                'journal_created_by' => 'admin',
                'journal_id' => 'JRN00004',
                'journal_type' => 'contact',
                'journal_value' => 'Jennifer M. Nailes, MD, MSPH',
                'journal_group' => 'chief_editor',
                'journal_link' => ''
            ],

        ]);
    }
}
