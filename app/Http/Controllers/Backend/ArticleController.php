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
use DB;


class ArticleController extends Controller
{
    //Loads main page
    public function LoadFeaturedArticlesMain(){

        $ArticleData = Article::where('article_status','featured')
                                ->orderBy('full_title')
                                ->get();
        return view('frontend.frontendmain', compact('ArticleData'));

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

    public function LoadAllArticlesMainP(){

        $ArticleData = Article::where('article_status','featured')
                        ->orWhere('article_status','active')
                        ->get();
        $JournalData = journal::where('journal_group','chief_editor')
                        ->get();
        return view('frontend.frontendalljournalsP', compact('ArticleData','JournalData'));

    }// End Method

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
        return view('frontend.frontendjournal', compact('ArticleData','AssociateData','UserData','EntityData','OrgData','role_array'));

    }// End Method


}
