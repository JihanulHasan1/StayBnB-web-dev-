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
        $UserRequest = new PostRequest;
        $UserRequest->user_id =$User_id;
        $UserRequest->post_id =$post_id;
        $UserRequest->req_type = 'Rent Out';
        $UserRequest->save();
        return request('checkout');
        echo $User_id, $post_id;
      
    }
    function store2($User_id, $post_id)
    {
        $UserRequest = new PostRequest;
        $UserRequest->user_id =$User_id;
        $UserRequest->post_id =$post_id;
        $UserRequest->req_type = 'Visit';
        $UserRequest->save();
        return redirect()->back()->with('message', 'Request Submitted!');
      
    }

}
