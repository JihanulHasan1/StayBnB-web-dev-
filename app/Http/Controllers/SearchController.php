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


    function getSearchResult(Request $request)
    {

        $Posts = Post::all();
        $result = array();

        foreach ($Posts as $p) {

            if (Str::contains(Strtolower($p->location), $request->search)) {

                array_push($result, $p);
            }
        }

        return view('auth.search',$result);
    }
}
