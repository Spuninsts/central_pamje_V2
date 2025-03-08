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
            //admin last number is 42
            [
                'user_id'=>'USER01',
                'title'=>'Dr.',
                'fname'=>'Main',
                'mname'=>'',
                'lname'=>'Administrator',
                'email'=>'buddie.alcantara@gmail.com',
                'password'=>Hash::make('Svvs123!'),
                'username'=>'main_centraladmin',
                'user_status'=>'active',
                'user_address'=>'Mr.',
                'user_type' => 'admin',
                'role' => 'admin'
            ],
            [
                'user_id'=>'USER02',
                'title'=>'Dr.',
                'fname'=>'Ivan',
                'mname'=>'',
                'lname'=>'Lawag',
                'email'=>'ivanlawag@gmail.com',
                'password'=>Hash::make('W3lcom3210'),
                'username'=>'ivan_centraladmin',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'admin',
                'role' => 'admin'
            ],
            [
                'user_id'=>'USER03',
                'title'=>'Ms.',
                'fname'=>'Rea',
                'mname'=>'',
                'lname'=>'Epistola',
                'email'=>'rea.epistola@gmail.com',
                'password'=>Hash::make('W3lcom3210'),
                'username'=>'rea_centraladmin',
                'user_status'=>'active',
                'user_address'=>'',
                'user_type' => 'admin',
                'role' => 'admin'
            ],
            [
                'user_id'=>'USER04',
                'title'=>'Dr.',
                'fname'=>'Julie',
                'mname'=>'',
                'lname'=>'Caguiat',
                'email'=>'juliecmd@gmail.com',
                'password'=>Hash::make('W3lcom3210'),
                'username'=>'julie_centraladmin',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'admin',
                'role' => 'admin'
            ],
            [ //editor
                'user_id'=>'USER41',
                'title'=>'Dr.',
                'fname'=>'editor',
                'mname'=>'',
                'lname'=>'iam',
                'email'=>'domain.junkie@gmail.com',
                'password'=>Hash::make('Svvs123!'),
                'username'=>'editor',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'editor',
                'role' => 'editor'
            ],
            [ //editor
                'user_id'=>'USER40',
                'title'=>'Dr.',
                'fname'=>'reviewer',
                'mname'=>'',
                'lname'=>'iam',
                'email'=>'domain.kie@gmail.com',
                'password'=>Hash::make('Svvs123!'),
                'username'=>'reviewer',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'reviewer',
                'role' => 'reviewer'
            ],
            [ //1st non std
                'user_id'=>'USER42',
                'title'=>'Dr.',
                'fname'=>'Francis',
                'mname'=>'G.',
                'lname'=>'Moria',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],


            [ //1st non std
                'user_id'=>'USER05',
                'title'=>'Dr.',
                'fname'=>'Ivy',
                'mname'=>'A.',
                'lname'=>'Rosales',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''

            ],

            [ //1st non std
                'user_id'=>'USER06',
                'title'=>'Dr.',
                'fname'=>'Frances',
                'lname'=>'saura-Sanchez',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'mname'=>'',
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'user_id'=>'USER07',
                'title'=>'Dr.',
                'fname'=>'Marie Christine',
                'mname'=>'F.',
                'lname'=>'Bernardo',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'user_id'=>'USER08',
                'title'=>'Dr.',
                'fname'=>'Ann Margarette',
                'lname'=>'Chang',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'mname'=>'',
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'user_id'=>'USER09',
                'title'=>'Dr.',
                'fname'=>'Farash Kristine',
                'lname'=>'Fontilla-Santiago',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'mname'=>'',
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'user_id'=>'USER10',
                'title'=>'Dr.',
                'fname'=>'Maricel',
                'lname'=>'Regino-Ribo',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'mname'=>'',
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER11',
                'title'=>'Dr.',
                'fname'=>'Augustina',
                'mname'=>'D.',
                'lname'=>'Abelardo',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'user_id'=>'USER12',
                'title'=>'Dr.',
                'fname'=>'Jose',
                'lname'=>'Carnate Jr.',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'mname'=>'',
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'user_id'=>'USER13',
                'title'=>'Ms.',
                'fname'=>'Rizalina',
                'mname'=>'F.',
                'lname'=>'Chua',
                'user_status'=>'active',
                'user_address'=>'',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'user_id'=>'USER14',
                'title'=>'Dr.',
                'fname'=>'Nelson',
                'mname'=>'T.',
                'lname'=>'Geraldino',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'user_id'=>'USER15',
                'title'=>'Dr.',
                'fname'=>'Evelina',
                'mname'=>'N.',
                'lname'=>'Lagamayo',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'user_id'=>'USER16',
                'title'=>'Dr.',
                'fname'=>'Raymundo',
                'mname'=>'W.',
                'lname'=>'Lo',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'user_id'=>'USER17',
                'title'=>'Dr.',
                'fname'=>'Miguel Martin',
                'mname'=>'N.',
                'lname'=>'Moreno II',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'user_id'=>'USER18',
                'title'=>'Dr.',
                'fname'=>'Januario',
                'mname'=>'D.',
                'lname'=>'Veloso',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [ //1st non std
                'user_id'=>'USER19',
                'title'=>'Dr.',
                'fname'=>'Erlinda',
                'mname'=>'',
                'lname'=>'Castro-Palaganas',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [ //1st non std
                'user_id'=>'USER20',
                'title'=>'Dr.',
                'fname'=>'Jose Florencio',
                'mname'=>'F.',
                'lname'=>'Lapena',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [ //1st non std
                'user_id'=>'USER21',
                'title'=>'Dr.',
                'fname'=>'Socorro',
                'mname'=>'C.',
                'lname'=>'Yanez',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'user_id'=>'USER22',
                'title'=>'Dr.',
                'fname'=>'Rowen',
                'mname'=>'T.',
                'lname'=>'Yolo',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'user_id'=>'USER23',
                'title'=>'Dr.',
                'fname'=>'Jose Ma',
                'mname'=>'C.',
                'lname'=>'Avila',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],

            [ //1st non std
                'user_id'=>'USER24',
                'title'=>'Dr.',
                'fname'=>'Marissa',
                'mname'=>'A.',
                'lname'=>'Orillaza',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER25',
                'title'=>'Dr.',
                'fname'=>'Marita V',
                'mname'=>'T.',
                'lname'=>'Reyes',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER26',
                'title'=>'Ms.',
                'fname'=>'April Christine',
                'mname'=>'E.',
                'lname'=>'Dagame',
                'user_status'=>'active',
                'user_address'=>'',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER27',
                'title'=>'Dr.',
                'fname'=>'Christopher Mallorre',
                'mname'=>'E.',
                'lname'=>'Calaquian',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER28',
                'title'=>'Dr.',
                'fname'=>'Ryner Jose',
                'mname'=>'C.',
                'lname'=>'Carrillo',
                'user_status'=>'active',
                'user_address'=>'MD, MSC',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER29',
                'title'=>'Dr.',
                'fname'=>'Samantha',
                'mname'=>'R.',
                'lname'=>'Soriano-Castañeda',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER30',
                'title'=>'Dr.',
                'fname'=>'Antonio',
                'mname'=>'H.',
                'lname'=>'Chua',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER31',
                'title'=>'Dr.',
                'fname'=>'Rodante',
                'mname'=>'A.',
                'lname'=>'Roldan',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER32',
                'title'=>'Dr.',
                'fname'=>'Marifee',
                'mname'=>'U.',
                'lname'=>'Reyes',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER33',
                'title'=>'Dr.',
                'fname'=>'Filipa',
                'mname'=>'T.',
                'lname'=>'Cevallos-Schnabel',
                'user_status'=>'active',
                'user_address'=>'MD, DNP',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER34',
                'title'=>'Dr.',
                'fname'=>'Erasmo Gonzalo',
                'mname'=>'DV.',
                'lname'=>'Llanes',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER35',
                'title'=>'Dr.',
                'fname'=>'Jose',
                'mname'=>'M.',
                'lname'=>'Acuin',
                'user_status'=>'active',
                'user_address'=>'MD, MSC',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER36',
                'title'=>'Dr.',
                'fname'=>'Robert',
                'mname'=>'G.',
                'lname'=>'Berkowitz',
                'user_status'=>'active',
                'user_address'=>'MD, MBBS',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER37',
                'title'=>'Dr.',
                'fname'=>'Charlotte',
                'mname'=>'M.',
                'lname'=>'Chiong',
                'user_status'=>'active',
                'user_address'=>'MD, PhD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER38',
                'title'=>'Dr.',
                'fname'=>'Jose Angelito',
                'mname'=>'U.',
                'lname'=>'Hardillo',
                'user_status'=>'active',
                'user_address'=>'MD, PhD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
            [
                'user_id'=>'USER39',
                'title'=>'Dr.',
                'fname'=>'KJ',
                'mname'=>'',
                'lname'=>'Lee',
                'user_status'=>'active',
                'user_address'=>'MD',
                'user_type' => 'contact',
                'role' => 'contact',
                'password'=>Hash::make('111'),
                'username'=>'',
                'email'=>''
            ],
        ]);



    }
}
