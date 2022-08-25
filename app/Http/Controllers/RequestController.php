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
    function store1($User_id, $post_id)
    {
        $All = PostRequest::all();
        $AllReq = PostRequest::where('user_id', '=', $User_id)
        ->where('post_id', '=', $post_id)
        ->where('req_type', '=', 'Rent Out')->first();
        if ($AllReq  === null) {
            $UserRequest = new PostRequest;
            $UserRequest->user_id = $User_id;
            $UserRequest->post_id = $post_id;
            $UserRequest->req_type = 'Rent Out';
            $UserRequest->save();
            return view('checkout');
        } else {
            return redirect()->back()->with('message', 'AllReady Requested');
        }
    }


    function store2($User_id, $post_id)
    {

        $AllReq = PostRequest::where('user_id', '=', $User_id)
        ->where('post_id', '=', $post_id)
        ->where('req_type', '=', 'Visit')->first();

        if ($AllReq  === null) {
            $UserRequest = new PostRequest;
            $UserRequest->user_id = $User_id;
            $UserRequest->post_id = $post_id;
            $UserRequest->req_type = 'Visit';
            $UserRequest->save();
            return redirect()->back()->with('message', 'Request Submitted!');
        } else {
            return redirect()->back()->with('message', 'AllReady Requested');
        }
    }
}
