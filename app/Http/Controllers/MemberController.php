<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function index () {
        $members = DB::table('members')
        ->get();
        return view('pages.membre',compact("members"));
    }
    public function indexCreateMember () {
        return view('pages.create-member');
    }
    public function createMemberSTORE (Request $request) {
        $store = new Member;
        $store->age = $request->age;
        $store->nom = $request->nom;
        $store->genre = $request->genre;
        $store->save();
        return redirect()->back();
    }
    
    public function indexHomme () {
        $memberHs = DB::table('members')
        ->where("genre", "=", "Homme")
        ->get();
        return view('pages.homme', compact("memberHs"));
    }
    public function indexFemme () {
        $memberFs = DB::table('members')
        ->where("genre", "=", "Femme")
        ->get();
        return view('pages.femme', compact("memberFs"));
    }

    public function destroy($id) {
        $destroy = Member::find($id);
        $destroy->delete();
        return redirect("/member");
    }
}
