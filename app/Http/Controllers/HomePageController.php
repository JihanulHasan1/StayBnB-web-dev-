<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;

class HomePageController extends Controller
{
    public function home()
    {
        $Dashboard = Ads::all();
        return view('welcome', ['dash' => $Dashboard]);
    }
       //see all ads
       function allads($location)
       {
           $data = ['data' => Ads::where('location', '=', $location)];
           return view('ads', $data);
       }
}
