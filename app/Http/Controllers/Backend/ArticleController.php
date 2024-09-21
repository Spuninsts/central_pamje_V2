<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\journal;
use App\Models\User;
use App\Models\organization;
use App\Models\Association;
use App\Models\entity;
use App\Models\page;
use DB;


class ArticleController extends Controller
{
    //Loads main page
    public function LoadFeaturedArticlesMain(){

        $ArticleData = Article::where('article_status','featured')
                                ->orderBy('full_title')
                                ->get(['journal_mid','full_title','short_title','about']);

        for($x=0;$x < count($ArticleData); $x++){
            $ArticleData[$x]->about = $this->getContextSummary($ArticleData[$x]->about)."...";
        }

        //dd($ArticleData);
        return view('frontend.frontendmain', compact('ArticleData'));

    }// End Method

    public function LoadArticleAlphabeticalMain(Request $request){

        $req = request()->val;
        // the prefix determines what page.
        if($req == 'all')
            $ArticleData = Article::where('article_status','!=','inactive')
                                    ->orderBy('full_title')
                                    ->get();
        else
            $ArticleData = Article::where('article_status','!=','inactive')
                                    ->where('full_title','LIKE',$req . '%' )
                                    ->orderBy('full_title')
                                    ->get();

        //dd($ArticleData);
            return view('frontend.frontendalljournals', compact('ArticleData'));

    }// End Method

    public function LoadArticleCategoryMain(Request $request){

        $req = request()->val;
        // the prefix determines what page.
        if($req == 'all')
            $ArticleData = Article::where('article_status','!=','inactive')
                                    ->orderBy('full_title')
                                    ->get();
        else
            $ArticleData = Article::where('article_status','!=','inactive')
                                    ->where('full_title','LIKE',$req . '%' )
                                    ->orderBy('full_title')
                                    ->get();

        //dd($ArticleData);
            return view('frontend.frontendcategoryjournals', compact('ArticleData'));

    }// End Method

    function getContextSummary($text) {
        // Split the text into an array of words
        $words = explode(' ', $text);

        // Get only the first 100 words
        $first100Words = array_slice($words, 0, 20);

        // Combine the words back into a string
        return implode(' ', $first100Words) . '...';
    }

        //Loads about us  page
    public function LoadAllAboutUsMain(){

        return view('frontend.frontendaboutus');

    }// End Method

    public function LoadAllArticlesMain(){

        $ArticleData = Article::where('article_status','featured')
                        ->orWhere('article_status','active')
                        ->get();
        $JournalData = journal::where('journal_group','chief_editor')
                        ->get();

       /*  $ArticleData = Article::leftJoin('journals', function($join) {
                                $join->on('journals.id', '=', 'articles.journal_mid');
                            })
                            ->orderBy('full_title')
                            ->get(); */

        /* $ArticleData = DB::table('laravel_synology.articles')
        ->leftjoin('laravel_synology.journals','journal_id','=','journal_mid')
        //->where()
        ->orderBy('full_title')
        ->get(); */

        //dd($ArticleData);
        return view('frontend.frontendalljournals', compact('ArticleData','JournalData'));

    }// End Method

    public function LoadAllArticlesMainU(){

        $ArticleData = Article::where('article_status','featured')
                        ->orWhere('article_status','active')
                        ->get();
        $JournalData = journal::where('journal_group','chief_editor')
                        ->get();

       /*  $ArticleData = Article::leftJoin('journals', function($join) {
                                $join->on('journals.id', '=', 'articles.journal_mid');
                            })
                            ->orderBy('full_title')
                            ->get(); */

        /* $ArticleData = DB::table('laravel_synology.articles')
        ->leftjoin('laravel_synology.journals','journal_id','=','journal_mid')
        //->where()
        ->orderBy('full_title')
        ->get(); */

        //dd($ArticleData);
        return view('frontend.frontendalljournalsU', compact('ArticleData','JournalData'));

    }// End Method

    // -- RESOURCES -- //
    public function LoadEditorMain(){

        $PageData = page::where('page_type','editor')
                        ->orWhere('page_type','editor tools')
                        ->orderBy('page_title')
                        ->get();
        return view('frontend.frontendeditors', compact('PageData'));

    }// End Method

    public function LoadAuthorMain(){

        $PageData = page::where('page_type','author')
                        ->orderBy('page_title')
                        ->get();
        return view('frontend.frontendauthors', compact('PageData'));

    }// End Method

    public function LoadReviewerMain(){

        $PageData = page::where('page_type','reviewer')
                        ->orderBy('page_title')
                        ->get();
        return view('frontend.frontendreviewers', compact('PageData'));

    }// End Method

    public function LoadResearcherMain(){

        $PageData = page::where('page_type','researcher')
                        ->orderBy('page_title')
                        ->get();
        return view('frontend.frontendresearchers', compact('PageData'));

    }// End Method


    // -- RESOURCES -- //

    // -- News and Announcements -- //

    public function LoadNewsAnnouncementMain(){

        $PageData = page::where('page_status','active')
                        ->where(function($query) {
                            $query->where('page_type','news')
                                  ->orWhere('page_type','announcement');
                        })
                        ->orderBy('created_at')
                        ->get();
        //dd($PageData);
        return view('frontend.frontendnewsannouncements', compact('PageData'));

    }// End Method

    // -- Contact US -- //
    public function LoadContactUsMain(){

        return view('frontend.frontendcontactus');

    }// End Method


    // -- News and Announcements -- //

    public function LoadAllArticleData(Request $request){

        //dd(request()->val);  // value from link parameter

        // * ARTICLE Data
        $ArticleData = Article::where('journal_mid',request()->val)
                        ->get();

        $AssociateData = Association::where('association_journal',$ArticleData[0]->journal_mid)
                        ->get();

        //Just getting the IDS on association table
        $temp_array = $role_array = array();
        $associate_userid_array=[];
        foreach($AssociateData as $assoc_id){
            array_push($temp_array,$assoc_id->association_id);
            if($assoc_id->association_source == 'user')
                array_push($role_array,$assoc_id->association_role);
        }
        $role_array = array_values(array_unique($role_array)); //unique roles for users.

        //dd($role_array);
        //dd($temp_array); // this has all the ID's needed for the other information.

        // * need to get indexes, publisher and users.  * //

        // * USERS
        $UserData = User::whereIn('user_id',$temp_array)
                        ->get();
        //dd($UserData);

            /*  $assoc_user_array = array();
                foreach($AssociateData as $adata){
                    //dd($adata->association_id);
                    foreach($UserData as $udata){
                        //dd($udata->user_id);
                            if($adata->association_id == $udata->user_id)
                                $assoc_user_array[$adata->association_role] = $udata->fname;
                                //array_push($assoc_user_array,$udata->fname);
                                //array_push($assoc_user_array,$adata->association_role);
                        }
                }

                dd($assoc_user_array); */

        // * Publisher and Indexes
        $EntityData = entity::whereIn('ent_id',$temp_array)
                        ->get();

        //dd($EntityData);
        // * ORGANIZATION
        $OrgData = organization::where('org_id',$ArticleData[0]->org_society)
                        ->get();
        //dd($OrgData);
        if( empty($OrgData[0]) ){
            $OrgData = array(
                        array("org_title" => "No Organization")
                       );
        }
        return view('frontend.frontendjournal', compact('ArticleData','AssociateData','UserData','EntityData','OrgData','role_array'));

    }// End Method


}
