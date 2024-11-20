<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *     'banner_status'
     *     'banner_title'
     *     'banner_description'
     *     'banner_image_path'
    *      'banner_url'
     */
    public function run(): void
    {
        DB::table('banners')->insert([
            //first entry
            [
                'banner_id' => 'BANNER01',
                'banner_created_by' => 'admin',
                'banner_status' => 'active',
                'banner_title' => 'Banner First Label',
                'banner_description' => 'Banner First Description',
                'banner_image_path' => '/public/images/kjhaskdfjhsadfsdf.jpg',
                'banner_url' => 'http://www.test.com'
            ],
            [   //second entry
                'banner_id' => 'BANNER02',
                'banner_created_by' => 'admin',
                'banner_status' => 'active',
                'banner_title' => 'Banner Second Label',
                'banner_description' => 'Banner Description 2',
                'banner_image_path' => '/public/images/sad87fyaisjdfhkwsjfd.jpg',
                'banner_url' => 'http://www.test2.com'
            ],
            [   //third entry
                'banner_id' => 'BANNER03',
                'banner_created_by' => 'admin',
                'banner_status' => 'active',
                'banner_title' => 'Banner Third Label',
                'banner_description' => 'Banner Description 3',
                'banner_image_path' => '/public/images/sad87fyaisjdfhkwsjfd.jpg',
                'banner_url' => '/admin/page/edit?val=PAGE03'
            ],
            [   //fourt entry
                'banner_id' => 'BANNER03',
                'banner_created_by' => 'admin',
                'banner_status' => 'active',
                'banner_title' => 'Banner Fourth Label',
                'banner_description' => 'Banner Description 4',
                'banner_image_path' => '/public/images/sad87fyaisjdfhkwsjfd.jpg',
                'banner_url' => '/admin/page/edit?val=PAGE04'
            ],

        ]);
    }
}
