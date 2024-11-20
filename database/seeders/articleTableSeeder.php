<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class articleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('articles')->insert([
            //first entry
            [
                'created_by' => '1',
                'journal_mid'=> 'JOURNAL01',
                'article_status' => 'featured',
                'full_title' => 'Philippine Journal of Otolaryngology Head and Neck Surgery',
                'short_title' => 'PJHONS',
                'org_society' => 'ORG01',
                'email' => 'pjohns@pso-hns.org',
                'article_contact' => 'Ms. April Christine E. Dagame',
                'contact_number'=>'09175962269',
                'about' => 'The Philippine Journal of Otolaryngology Head and Neck Surgery (PJOHNS) is the official, open-access journal of the Philippine Society of Otolaryngology Head and Neck Surgery. Committed to ethical and high-quality publishing, it adheres to international standards set by International Committee of Medical Journal Editors (ICMJE), Committee on Publication Ethics (COPE), Directory of Open Access Journals (DOAJ), Open Access Scholarly Publishers Association (OASPA), and World Association of Medical Editors (WAME). Led by dedicated editors, the journal publishes original research and scholarly work, aiming to advance knowledge and contribute to best practices in the field.',
                'aims_scope' => 'PJOHNS serves as a global scholarly forum for knowledge exchange amongst otolaryngologists and healthcare professionals in the field of otolaryngology and head and neck medicine and surgery. It publishes diverse peer-reviewed content, including original research, case studies, and reviews, with a focus on the Philippines and Asia-Pacific region. The journal prioritizes research relevant to low- and middle-income countries.',
                'link' => 'https://pjohns.pso-hns.org/index.php/pjohns',
                'policy' => 'Published semiannually in paid print, free open access electronic versions',
                'article_category' => '',
                'article_tags' => '',
                'photo' => '/frontend/img/journal01.jpg',
            ],
            [   //second entry
                'created_by' => '2',
                'journal_mid'=> 'JOURNAL02',
                'article_status' => 'featured',
                'full_title' => 'Philippine Journal of Nursing',
                'short_title' => 'PJN',
                'org_society' => 'ORG02',
                'email' => 'philippinenursesassociation@yahoo.com.ph',
                'article_contact' => 'Hazel Vera D. Tan, RN ',
                'contact_number'=>'09190857361',
                'about' => 'The Philippine Journal of Nursing (PJN), a biannual, peer-reviewed publication of the Philippine Nurses Association, serves as a platform for Filipino nurses. It features original research and scientific papers (including abstracts) across diverse nursing areas like clinical, community, administrative, and educational settings. As the official journal, PJN promotes professional growth by: (i) Publishing high-quality research and scholarship; (ii) Providing updates on relevant policies and standards; and (iii) Facilitating collegial interaction among nurses. ',
                'aims_scope' => 'None',
                'link' => 'http://www.pna-pjn.com',
                'policy' => 'Open Access',
                'article_category' => '',
                'article_tags' => '',
                'photo' => '/frontend/img/journal02.jpg',
            ],
            [   //third entry
                'created_by' => '2',
                'journal_mid'=> 'JOURNAL03',
                'article_status' => 'featured',
                'full_title' => 'Philippine Journal of Pathology',
                'short_title' => 'PJP',
                'org_society' => 'ORG03',
                'email' => 'philippinepathologyjournal@gmail.com',
                'article_contact' => 'Ms. Melissa Tandoc',
                'contact_number'=>'09202548762',
                'about' => 'The Philippine Journal of Pathology (PJP) is a flagship open-access, peer-reviewed journal dedicated to advancing understanding and knowledge in the field of pathology within the Philippines. Published by the Philippine Society of Pathologists, Inc. Committee on Publications, the PJP prioritizes studies and case reports relevant to the Philippine context, encompassing clinical and anatomic pathology, laboratory medicine, and associated disciplines. Targeting Filipino pathologists, laboratorians, diagnosticians, and allied professionals, the PJP fosters knowledge dissemination and ensures that valuable findings reach a wider audience, contributing to improved diagnostics, patient care, and public health outcomes.',
                'aims_scope' => 'None',
                'link' => 'https://philippinejournalofpathology.org/index.php/PJP',
                'policy' => 'Open Access',
                'article_category' => '',
                'article_tags' => '',
                'photo' => '/frontend/img/journal03.jpg',
            ],
            [   //third entry
                'created_by' => '2',
                'journal_mid'=> 'JOURNAL04',
                'article_status' => 'featured',
                'full_title' => 'UERMMMCI, Inc. Health Sciences Journal',
                'short_title' => 'UHSJ',
                'org_society' => 'None',
                'email' => 'research@uerm.edu.ph',
                'article_contact' => 'Ms. Jez Sicosana',
                'contact_number'=>'None',
                'about' => 'None',
                'aims_scope' => 'None',
                'link' => 'https://uerm.edu.ph/research/journals',
                'policy' => 'Open Access',
                'article_category' => '',
                'article_tags' => '',
                'photo' => '/frontend/img/journal04.jpg',
            ],

        ]);
    }
}
