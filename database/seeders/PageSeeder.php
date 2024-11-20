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
                'page_id' => 'PAGE01',
                'page_status' => 'active',
                'page_type' => 'News',
                'page_title' => 'First News',
                'page_description' => 'First News Description',
                'page_image_path' => '/public/images/lkjh897u3hijf.jpg',
                'page_url' => 'http://www.news1.com',
                'page_category' => 'none',
                'page_subcategory' => 'none',
                'page_source' => '',
                'page_tags' => 'none'
            ],
            [   //second entry
                'page_id' => 'PAGE02',
                'page_status' => 'active',
                'page_type' => 'Announcement',
                'page_title' => 'First announcement',
                'page_description' => 'First announcement Description',
                'page_image_path' => '/public/images/lkjh2343fd3hijf.jpg',
                'page_url' => 'http://www.announcement1.com',
                'page_category' => 'none',
                'page_subcategory' => 'none',
                'page_source' => '',
                'page_tags' => 'none'
            ],
            [   //third entry
                'page_id' => 'PAGE03',
                'page_status' => 'active',
                'page_type' => 'News',
                'page_title' => 'First news2',
                'page_description' => 'First news2 Description',
                'page_image_path' => '/public/images/lkj23eh2343fd3hijf.jpg',
                'page_url' => 'http://www.news2.com',
                'page_category' => 'none',
                'page_subcategory' => 'none',
                'page_source' => '',
                'page_tags' => 'none'
            ],
            [   //fourth entry
                'page_id' => 'PAGE04',
                'page_status' => 'active',
                'page_type' => 'Announcement',
                'page_title' => 'First announcement2',
                'page_description' => 'First announcement2 Description',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'http://www.announcement2.com',
                'page_category' => 'none',
                'page_subcategory' => 'none',
                'page_source' => '',
                'page_tags' => 'none'
            ],
            [   //fifth entry
                'page_id' => 'PAGE05',
                'page_status' => 'active',
                'page_type' => 'Banner',
                'page_title' => 'First banner1',
                'page_description' => 'First banner1 Description',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => '/page/data/banner1',
                'page_category' => 'none',
                'page_subcategory' => 'none',
                'page_source' => '',
                'page_tags' => 'none'
            ],
            [   //sixth entry
                'page_id' => 'PAGE06',
                'page_status' => 'active',
                'page_type' => 'Banner',
                'page_title' => 'First banner2',
                'page_description' => 'First banner2 Description',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => '/page/data/banner2',
                'page_category' => 'none',
                'page_subcategory' => 'none',
                'page_source' => '',
                'page_tags' => 'none'
            ],
            [   //sixth entry
                'page_id' => 'PAGE07',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'ICMJE Recommendations',
                'page_description' => 'The International Committee of Medical Journal Editors (ICMJE) developed the “Recommendations for the Conduct, Reporting, Editing and Publication of Scholarly Work in Medical Journals” (ICMJE Recommendations).  These recommendations include a range of topics, including ethical guidelines for authorship, conflicts of interest, and patient protection. They also provide instructions for authors on manuscript preparation and submission. For editors, the ICMJE Recommendations outline established best practices for conducting peer review and handling submissions with confidentiality, timeliness, and sound editorial decision-making.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://www.icmje.org/journals-following-the-icmje-recommendations/',
                'page_category' => 'Editor',
                'page_subcategory' => 'Peer Review Processes',
                'page_source' => 'The Guardian',
                'page_tags' => 'Guidelines'
            ],
            [   //sixth entry
                'page_id' => 'PAGE08',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'EQUATOR Network',
                'page_description' => 'Established in 2008, the EQUATOR Network (Enhancing the Quality and Transparency Of health Research) serves as a valuable resource for editors seeking specific reporting guidelines for various research types. The Equator offers a comprehensive suite of tools, including an online library, educational programs, and established reporting guidelines, to assist editors in ensuring the quality and reliability of health research publications.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://www.equator-network.org/',
                'page_category' => 'Researcher',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE09',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'WAME',
                'page_description' => 'The World Association of Medical Editors (WAME), established in 1995, is a resource of peer-reviewed medical journals from its membership of over 1,000 journals across 92 countries.  This international, non-profit organization fosters collaboration and communication among editors through various initiatives.  WAME\'s core mission is to elevate editorial standards and promote professionalism within medical editing.  This is achieved by providing educational resources, encouraging self-criticism and self-regulation, and supporting research on editorial practices.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://wame.org/',
                'page_category' => 'Editor',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE10',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'COPE',
                'page_description' => 'The Committee on Publication Ethics (COPE) is an international organization established to provide advice and guidance on best practices for dealing with ethical issues in journal publishing. Originally focused on editors and publishers of academic journals, COPE\'s membership has expanded to include universities, research institutions, and individuals involved in publication ethics. COPE offers various resources and guidance, including: (i) Policies and practices on good publication ethics; (ii) An eLearning course on topics such as plagiarism, falsification, authorship, conflicts of interest, and misconduct; and (iii) Participation in discussions on current ethical issues.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://publicationethics.org/',
                'page_category' => 'Editor',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE11',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'WAME Recommendations on Chatbots and Generative Artificial Intelligence in Relation to Scholarly Publications, Revised May 31, 2023',
                'page_description' => 'This revised statement updates the January 2023 recommendations on chatbots in scholarly publishing. These Recommendations are intended to inform editors and help them develop policies for using chatbots in papers published in their journals. The goal is to inform editors, authors, and reviewers on best practices and the need for manuscript screening tools to ensure content authenticity.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://wame.org/page3.php?id=106',
                'page_category' => 'Author',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE12',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'DOI',
                'page_description' => 'A DOI, or Digital Object Identifier, is a unique and persistent code assigned to scholarly works, like articles, papers, and some books, to permanently identify them. DOIs persist even if the location of the content changes, ensuring reliable access to the publication.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://www.doi.org/',
                'page_category' => 'Author',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE13',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'WAME Manuscript submission checklist',
                'page_description' => 'The World Association of Medical Editors (WAME) offers a Manuscript Submission Checklist as a template for medical journal editors to utilize during the manuscript submission process for their respective publications. The checklist is a tool to guide medical journal editors in identifying potential issues like duplicate publications, conflicts of interest, authorship concerns, and the use of AI tools. Additionally, the checklist helps verify the ethical conduct of research, data access, and proper reporting standards.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://www.wame.org/manuscript-submission-checklist ',
                'page_category' => 'Editor',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE14',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'WAME Recommendations on Publication Ethics Policies for Medical Journals',
                'page_description' => 'This article summarizes a comprehensive publication ethics policy covering key areas for contemporary science journals. Editors can adapt these recommendations for their own journals and publish them publicly (print or web) while tailoring them to fit specific needs.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://wame.org/recommendations-on-publication-ethics-policies-for-medical-journals',
                'page_category' => 'Editor',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE15',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'WAME Syllabus for Prospective and Newly Appointed Editors',
                'page_description' => 'This syllabus guides potential and newly appointed editors of peer-reviewed research journals. It outlines the editor’s key responsibilities, along with an editorial process overview. The syllabus includes (i) Editor Roles and Responsibilities, (ii) Questions and insights to help individuals assess their suitability for an editor position, and (iii) an Explanation of the steps involved in editing a journal, including potential challenges and solutions.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://wame.org/syllabus-for-prospective-and-newly-appointed-editors',
                'page_category' => 'Editor',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE16',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'ICMJE Recommendations',
                'page_description' => 'The International Committee of Medical Journal Editors (ICMJE) developed the “Recommendations for the Conduct, Reporting, Editing and Publication of Scholarly Work in Medical Journals” (ICMJE Recommendations).  These recommendations include a range of topics, including ethical guidelines for authorship, conflicts of interest, and patient protection. They also provide instructions for authors on manuscript preparation and submission. For editors, the ICMJE Recommendations outline established best practices for conducting peer review and handling submissions with confidentiality, timeliness, and sound editorial decision-making.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://www.icmje.org/journals-following-the-icmje-recommendations/',
                'page_category' => 'Reviewer',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE17',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'EQUATOR Network',
                'page_description' => 'Established in 2008, the EQUATOR Network (Enhancing the Quality and Transparency Of health Research) serves as a valuable resource for editors seeking specific reporting guidelines for various research types. The Equator offers a comprehensive suite of tools, including an online library, educational programs, and established reporting guidelines, to assist editors in ensuring the quality and reliability of health research publications.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://www.equator-network.org/',
                'page_category' => 'Reviewer',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE18',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'WAME',
                'page_description' => 'The World Association of Medical Editors (WAME), established in 1995, is a resource of peer-reviewed medical journals from its membership of over 1,000 journals across 92 countries.  This international, non-profit organization fosters collaboration and communication among editors through various initiatives.  WAME\'s core mission is to elevate editorial standards and promote professionalism within medical editing.  This is achieved by providing educational resources, encouraging self-criticism and self-regulation, and supporting research on editorial practices.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://wame.org/',
                'page_category' => 'Reviewer',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE19',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'COPE',
                'page_description' => 'The Committee on Publication Ethics (COPE) is an international organization established to provide advice and guidance on best practices for dealing with ethical issues in journal publishing. Originally focused on editors and publishers of academic journals, COPE\'s membership has expanded to include universities, research institutions, and individuals involved in publication ethics. COPE offers various resources and guidance, including: (i) Policies and practices on good publication ethics; (ii) An eLearning course on topics such as plagiarism, falsification, authorship, conflicts of interest, and misconduct; and (iii) Participation in discussions on current ethical issues.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://publicationethics.org/',
                'page_category' => 'Author',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE20',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'EQUATOR network',
                'page_description' => 'This user-friendly tool assists authors in identifying their study paradigm and directs them to the appropriate reporting guidelines. Encompassing all major guidelines, the tool offers a step-by-step approach like a choose-your-own-adventure book (as described by a Lancet editor).',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://www.equator-network.org/',
                'page_category' => 'Author',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE21',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'ICJME: Responsibilities in the Submission and Peer-Review Process',
                'page_description' => 'These recommendations serve as a guide for authors in understanding their responsibilities in the submissions and peer-review process.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://www.icmje.org/recommendations/browse/roles-and-responsibilities/responsibilities-in-the-submission-and-peer-peview-process.html',
                'page_category' => 'Author',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE22',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'ICJME: Defining the Role of Authors and Contributors',
                'page_description' => 'The International Committee of Medical Journal Editors (ICMJE) developed these recommendations to define the author’s role and accountability for what is published, the criteria for authorship, and the policies for non-author contributors and use of Artificial Intelligence (AI)-Assisted Technology in the production of submitted works.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://www.icmje.org/recommendations/browse/roles-and-responsibilities/',
                'page_category' => 'Editor',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE23',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'ICMJE Guidelines',
                'page_description' => 'The International Committee of Medical Journal Editors (ICMJE) offers these recommendations to examine best practices and ethical considerations for conducting, reporting, and publishing research and other content within medical journals. These guidelines aim to assist authors, editors, and those involved in peer review and biomedical publishing in creating and disseminating accurate, clear, reproducible, and unbiased medical journal articles.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://icmje.org/recommendations/',
                'page_category' => 'Editor',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE24',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => '2022 National Ethical Guidelines for Research Involving Human Participants',
                'page_description' => 'The 2022 National Ethical Guidelines for Research Involving Human Participants update previous guidelines to address science, technology, and social science advancements. They prioritize the well-being of research participants while ensuring the ethical conduct of research remains current. These guidelines offer more specific guidance for research areas such as  social research, internet-based research,  public health emergencies, and herbal medicine, among others.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://www.equator-network.org/',
                'page_category' => 'Reviewer',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],
            [   //sixth entry
                'page_id' => 'PAGE25',
                'page_status' => 'active',
                'page_type' => 'Resource',
                'page_title' => 'ORCID Number',
                'page_description' => 'An ORCID ID or Open Researcher and Contributor ID is a unique, lifelong digital identifier for you as an author/contributor. It is a tool that can track research output from various databases and consolidate them into a single profile.',
                'page_image_path' => '/public/images/lkjh2324erfd343fd3hijf.jpg',
                'page_url' => 'https://orcid.org/',
                'page_category' => 'Researcher',
                'page_subcategory' => '',
                'page_source' => '',
                'page_tags' => ''
            ],

        ]);
    }
}
