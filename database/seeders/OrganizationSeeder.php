<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds
    *  $table->string('org_id')->nullable();
    *  $table->string('org_status')->nullable(); // active,inactive
    *  $table->string('org_title')->nullable(); // banner title
    *  $table->text('org_description')->nullable(); // banner description
    *  $table->text('org_image_path')->nullable(); // for the image
    *  $table->text('org_url')
     */
    public function run(): void
    {
        //
        DB::table('organizations')->insert([
            //first entry
            [
                'org_id' => 'org01',
                'org_status' => 'active',
                'org_title' => 'org1 Label',
                'org_description' => 'org1 Description',
                'org_image_path' => '/public/images/kjhaskdfjhsadfsdf.jpg',
                'org_url' => 'http://www.org1.com'
            ],
            [
                'org_id' => 'org02',
                'org_status' => 'active',
                'org_title' => 'second Label',
                'org_description' => 'org Description',
                'org_image_path' => '/public/images/32ewfr2e3w.jpg',
                'org_url' => 'http://www.og]2.com'
            ],

        ]);
    }
}
