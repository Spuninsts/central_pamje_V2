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
                'role'=>'admin',
                'username'=>'admin',
                'status'=>'active',
                'user_type' => 'standard'
            ],
            [ //author
                'title'=>'MD',
                'fname'=>'editor',
                'mname'=>'',
                'lname'=>'iam',
                'email'=>'domain.junkie@gmail.com',
                'password'=>Hash::make('111'),
                'role'=>'author',
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
                'role'=>'reviewer',
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
                'role'=>'author',
                'username'=>'author2',
                'status'=>'active',
                'user_type' => 'standard'
            ],
            [ //1st non std
                'title'=>'Dr.',
                'fname'=>'Francis',
                'mname'=>'G.',
                'lname'=>'Moria',
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
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
                'role'=>'contact',
                'status'=>'active',
                'user_type' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],


        ]);



    }
}
