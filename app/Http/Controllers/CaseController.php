<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Cases;
use App\Reason;
use App\Ban;

class CaseController extends Controller
{
    public function index() {
        return $cases = Ban::with('reason', 'user')->get();
    }

    public function single($id) {
        $case = Cases::where('id', $id)->with('bans')->first();

        return view('single')->with('case', $case);
    }

    public function create(Request $request) {
        $user = Auth::user();
        $case = new Cases;
        $case->name = $request->input('name');
        $case->facebook_id = $request->input('facebook_id');
        $case->user_id = $user->id;
        $case->save();


        $ban = new Ban;
        $ban->fill($request->all());
        $ban->case_id = $case->id;

        $ban->save();
        $case->ban = $ban;
        
        return view('single')->with('case', $case);
    }

    public function createView() {
        $reasons = Reason::all();

        return view('case.create')->with('reasons', $reasons);
    }
}
