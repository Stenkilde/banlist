<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ban;
use App\User;
use App\Cases;

class SearchController extends Controller
{
    public function search(Request $request) {   
        $user = Auth::user();
        $searchQuery = $request->input('search');
        
        // $bans = Ban::where('type', 'LIKE', '%' . $searchQuery . '%')
        // ->orWhere('facebook_id', 'LIKE', '%' . $searchQuery . '%')
        // ->orWhere('description', 'LIKE', '%' . $searchQuery . '%')->get();

        // $newBans = [];

        // foreach($bans as $ban) {
        //     array_push($newBans, Cases::where('id', $ban->case_id)->with('bans')->all());
        // }

        $cases = Cases::where('name', 'LIKE', '%' . $searchQuery . '%')
            ->orWhere('facebook_id', 'LIKE', '%' . $searchQuery . '%')
            ->with('user')->orderBy('updated_at', 'desc')->paginate(30);

        // $cases = array_merge($newBans, $cases->toArray());

        // $newCases = [];

        // foreach($cases as $c) {
        //     array_push($newCases, $c);
        // }

        return view('home')->with('cases', $cases)->with('user', $user);
    }
}
