<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; //Journal Org
use App\Models\page;

class SearchController extends Controller
{
    //Search criteria
    public function SearchContents(Request $request)
    {
        $query = $request->input('query');
        //dd($query);
        $pageData = "";

        // Define the models you want to search across
        $articleData = Article::where('full_title', 'LIKE', "%{$query}%")
            ->orWhere('about', 'LIKE', "%{$query}%")
            ->get();

        $pageData = page::where('page_title', 'LIKE', "%{$query}%")
            ->orWhere('page_description', 'LIKE', "%{$query}%")
            ->get();

        for($x=0;$x < count($articleData); $x++){
            $articleData[$x]->about = $this->getContextSummary($articleData[$x]->about)."...";
        }

        for($x=0;$x < count($pageData); $x++){
            $pageData[$x]->page_description = $this->getContextSummary($pageData[$x]->page_description)."...";
        }

        // Combine results (optional)
        $results = $articleData->merge($pageData);
        //dd($results);

        return view('frontend.frontendsearchresult', compact('results', 'query'));
    } // end global search

    function getContextSummary($text) {
        // Split the text into an array of words
        $words = explode(' ', $text);

        // Get only the first 100 words
        $first100Words = array_slice($words, 0, 12);

        // Combine the words back into a string
        return implode(' ', $first100Words) . '...';
    }


}
