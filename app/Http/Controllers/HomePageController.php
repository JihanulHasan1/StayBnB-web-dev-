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
}
