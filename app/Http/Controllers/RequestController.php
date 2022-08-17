<?php

namespace App\Http\Controllers;



use App\Traits;

use Illuminate\Http\Request;
use App\Http\Controllers\MailMessage;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Ads;
use App\Models\Post;
use App\Models\PostRequest;

class RequestController extends Controller
{
    function store(Request $request)
    {
        return redirect()->back()->with('message', 'IT WORKS!');
        
    }
}
