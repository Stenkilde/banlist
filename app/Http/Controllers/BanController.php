<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ban;
use App\Reason;

class BanController extends Controller
{
    public function index() {
        return $bans = Ban::with('reason', 'user')->get();
    }

    public function single($id) {
        $ban = Ban::where('id', $id)->with('reason')->first();

//        $ban->cases = Comment::where('user_id', $id)->get();

        return $ban;
    }

    public function create(Request $request) {
        $ban = new Ban;

        $ban->fill($request->all());
        $ban->save();

        return $ban;
    }

    public function view() {
        $bans = Ban::all();

        return view('home')->with('bans', $bans);
    }
}
