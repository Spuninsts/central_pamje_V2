<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; //Journal Org
use App\Models\page;

class SearchController extends Controller
{
    //Search criteria
    public function index(Request $request)
    {
        $query = $request->input('query');
        $pageData = "";

        // Define the models you want to search across
        $articleData = Article::where('full_title', 'LIKE', "%{$query}%")
            ->orWhere('about', 'LIKE', "%{$query}%")
            ->get();

        $pageData = page::where('page_title', 'LIKE', "%{$query}%")
            ->orWhere('page_description', 'LIKE', "%{$query}%")
            ->get();

        // Combine results (optional)

        $results = $articleData->merge($pageData);

        return view('frontend.frontendsearchresult', compact('results', 'query'));
    } // end global search


}
