<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ban;
use App\User;
use App\Cases;

class SearchController extends Controller
{
    public function search(Request $request) {   
        $user = Auth::user();
        $searchQuery = $request->input('search');
        
        $searchResult = Ban::where('type', 'LIKE', '%' . $searchQuery . '%')
        ->orWhere('facebook_id', 'LIKE', '%' . $searchQuery . '%')
        ->orWhere('description', 'LIKE', '%' . $searchQuery . '%')->get();

        return view('home')->with('cases', $cases)->with('user', $user);
    }
}
