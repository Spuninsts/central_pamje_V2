<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'title'=>'MD',
                'fname'=>'admin',
                'mname'=>'',
                'lname'=>'istrator',
                'email'=>'domainjunkie@gmail.com',
                'password'=>Hash::make('111'),
                'journal_id'=>'',
                'journal_role'=>'',
                'username'=>'admin',
                'status'=>'active',
                'user_type' => 'admin'
            ],
            [ //author
                'title'=>'MD',
                'fname'=>'editor',
                'mname'=>'',
                'lname'=>'iam',
                'email'=>'domain.junkie@gmail.com',
                'password'=>Hash::make('111'),
                'journal_id'=>'JRN00001',
                'journal_role'=>'',
                'username'=>'author',
                'status'=>'active',
                'user_type' => 'standard'
            ],

            [ //reviewer
                'title'=>'MD',
                'fname'=>'reviewer',
                'mname'=>'',
                'lname'=>'tomorrow',
                'email'=>'dom.ainjunkie@gmail.com',
                'password'=>Hash::make('111'),
                'journal_id'=>'JRN00001',
                'journal_role'=>'',
                'username'=>'reviewer',
                'status'=>'active',
                'user_type' => 'standard'
            ],
            [ //2nd author
                'title'=>'MD',
                'fname'=>'second',
                'mname'=>'',
                'lname'=>'author',
                'email'=>'djunkie456@gmail.com',
                'password'=>Hash::make('111'),
                'journal_id'=>'JRN00001',
                'journal_role'=>'',
                'username'=>'author2',
                'status'=>'active',
                'user_type' => 'standard'
            ],
            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Francis',
                'mname'=>'G.',
                'lname'=>'Moria',
                'journal_id'=>'JRN00001',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],


            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Ivy',
                'mname'=>'A.',
                'lname'=>'Rosales',
                'journal_id'=>'JRN00001',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''

            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Frances',
                'lname'=>'saura-Sanchez',
                'journal_id'=>'JRN00001',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'mname'=>'',
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Marie Christine',
                'mname'=>'F.',
                'lname'=>'Bernardo',
                'journal_id'=>'JRN00002',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Ann Margarette',
                'lname'=>'Chang',
                'journal_id'=>'JRN00002',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'mname'=>'',
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Farash Kristine',
                'lname'=>'Fontilla-Santiago',
                'journal_id'=>'JRN00003',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'mname'=>'',
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Maricel',
                'lname'=>'Regino-Ribo',
                'journal_id'=>'JRN00003',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'mname'=>'',
                'username'=>'',
                'email'=>''
            ],
            [
                'title'=>'Dr.',
                'fname'=>'Augustina',
                'mname'=>'D.',
                'lname'=>'Abelardo',
                'journal_id'=>'JRN00002',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Jose',
                'lname'=>'Carnate Jr.',
                'journal_id'=>'JRN00002',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'mname'=>'',
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Ms.',
                'fname'=>'Rizalina',
                'mname'=>'F.',
                'lname'=>'Chua',
                'journal_id'=>'JRN00003',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Nelson',
                'mname'=>'T.',
                'lname'=>'Geraldino',
                'journal_id'=>'JRN00002',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Evelina',
                'mname'=>'N.',
                'lname'=>'Lagamayo',
                'journal_id'=>'JRN00001',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Raymundo',
                'mname'=>'W.',
                'lname'=>'Lo',
                'journal_id'=>'JRN00001',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Miguel Martin',
                'mname'=>'N.',
                'lname'=>'Moreno II',
                'journal_id'=>'JRN00001',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Januario',
                'mname'=>'D.',
                'lname'=>'Veloso',
                'journal_id'=>'JRN00001',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Erlinda',
                'mname'=>'',
                'lname'=>'Castro-Palaganas',
                'journal_id'=>'JRN00002',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Jose Florencio',
                'mname'=>'F.',
                'lname'=>'Lapena',
                'journal_id'=>'JRN00003',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Socorro',
                'mname'=>'C.',
                'lname'=>'Yanez',
                'journal_id'=>'JRN00002',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Rowen',
                'mname'=>'T.',
                'lname'=>'Yolo',
                'journal_id'=>'JRN00002',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Jose Ma',
                'mname'=>'C.',
                'lname'=>'Avila',
                'journal_id'=>'JRN00002',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Marissa',
                'mname'=>'A.',
                'lname'=>'Orillaza',
                'journal_id'=>'JRN00001',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Marita V',
                'mname'=>'T.',
                'lname'=>'Reyes',
                'journal_id'=>'JRN00001',
                'journal_role'=>'',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],


        ]);



    }
}
