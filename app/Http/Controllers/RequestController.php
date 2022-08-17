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
    function store(Request $request, $id)


    {


        $User = User::where('post_id', '=', $id)->first();
        $UserRequest = new PostRequest;
        $UserRequest->user_id = $User->user_id;
        $UserRequest->post_id = $id;
        $UserRequest->req_type = 'Visit';
        $UserRequest->save();
        return redirect()->back()->with('message', 'Request Submitted!');
        echo  $UserRequest;
    }
}
