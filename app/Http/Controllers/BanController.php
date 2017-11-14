<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ban;
use App\Cases;
use App\Reason;

class BanController extends Controller
{
    public function index() {
        return $bans = Ban::with('reason', 'user')->get();
    }

    public function single($id) {
        $ban = Ban::where('id', $id)->with('reason')->first();

        return view('single')->with('ban', $ban);
    }

    public function create(Request $request) {
        $ban = new Ban;
        $ban->fill($request->all());
        $ban->save();

        return $ban;
    }

    public function view() {
        $user = Auth::user();
        $cases = Cases::with('user')->orderBy('updated_at', 'desc')->paginate(30);

        return view('home')->with('cases', $cases)->with('user', $user);
    }

    public function post(Request $request) {
        $ban = new Ban;
        $ban->fill($request->all());

        $ban->save();

        return redirect()->route('case', ['id' => $ban->case_id]);
    }

    public function createView($id) {
        $reasons = Reason::all();        

        return view('post')->with('id', $id)->with('reasons', $reasons);
    }
}
