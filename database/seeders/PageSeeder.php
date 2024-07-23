<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * ('page_status')
     * ('page_type'))
     * ('page_title')
     * ('page_description')
      * ('page_image_path')
      * ('page_url')
     */
    public function run(): void
    {
        //
        DB::table('pages')->insert([

            [   //first entry
                'page_status' => 'active',
                'page_type' => 'news',
                'page_title' => 'First News',
                'page_description' => 'First News Description',
                'page_image_path' => '/public/images/lkjh897u3hijf.jpg',
                'page_url' => 'http://www.news1.com'
            ],
            [   //second entry
                'page_status' => 'active',
                'page_type' => 'announcement',
                'page_title' => 'First announcement',
                'page_description' => 'First announcement Description',
                'page_image_path' => '/public/images/lkjh2343fd3hijf.jpg',
                'page_url' => 'http://www.announcement1.com'
            ],
            [   //third entry
                'page_status' => 'active',
                'page_type' => 'news',
                'page_title' => 'First news2',
                'page_description' => 'First news2 Description',
                'page_image_path' => '/public/images/lkj23eh2343fd3hijf.jpg',
                'page_url' => 'http://www.news2.com'
            ],
            [   //fourth entry
                'page_status' => 'active',
                'page_type' => 'announcement',
                'page_title' => 'First announcement2',
                'page_description' => 'First announcement2 Description',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'http://www.announcement2.com'
            ],
            [   //fifth entry
                'page_status' => 'active',
                'page_type' => 'banner',
                'page_title' => 'First banner1',
                'page_description' => 'First banner1 Description',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => '/page/data/banner1'
            ],
            [   //sixth entry
                'page_status' => 'active',
                'page_type' => 'banner',
                'page_title' => 'First banner2',
                'page_description' => 'First banner2 Description',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => '/page/data/banner2'
            ],

        ]);
    }
}
