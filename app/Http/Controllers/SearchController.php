<?php

namespace App\Http\Controllers;

use App\Traits;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Ads;
use App\Models\Post;

class SearchController extends Controller
{
    function getSearchResult(Request $request, $id)
    {

        $Posts = Post::all();
        $result = array();
        foreach ($Posts as $p) {
            if (Str::contains(Strtolower($p->area), Strtolower($request->search))) {
                if($p->user_id!=$id){
                array_push($result, $p);
            }
         }
        }
        $User = User::where('user_id', '=', $id)->first();
        return view('auth.searchResult',['result'=>$result,'user'=>$User]);
    }
}
