<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\journal;
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


}
