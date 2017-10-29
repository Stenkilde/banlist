<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cases;
use App\Reason;
use App\User;

class CaseController extends Controller
{
    public function index() {
        return $cases = Ban::with('reason', 'user')->get();
    }

    public function single($id) {
        $case = Cases::where('id', $id)->with('bans')->get();
        return $case;

        return view('case')->with('case', $case);
    }

    public function create(Request $request) {
        // @TODO Remember to load the user with token
        return $request->all();
    }

    public function createView() {
        $reasons = Reason::all();

        return view('case.create')->with('reasons', $reasons);
    }
}
