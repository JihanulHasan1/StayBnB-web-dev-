<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;



class PostController extends Controller
{
    public function store(Request $request,$id)
    {

        $allPosts = Post::where('user_id','=' ,$id)->get();;
      /// $allPosts=Post::all();

        $Post = new Post;
        $Post->firstName = $request->fname;
        $Post->lastName = $request->lname;
        $Post->phone_no = $request->phoneNo;
        $Post->email = $request->email;
        $Post->tittle = $request->tittle;
        $Post->description = $request->description;
        if (!empty($_POST['area'])) {
            $Post->area = $_POST['area'];
        }
        $Post->address = $request->adress;
        if (!empty($_POST['block'])) {
            $Post->block = $_POST['block'];
        }
        if (!empty($_POST['restriction'])) {
            $Post->restriction = $_POST['restriction'];
        }

        $Post->price = $request->price;

        if (isset($_POST['advance'])) {

            $Post->advance = $_POST['advance'];
        }

        if (isset($_POST['date'])) {

            $Post->payment_date = $_POST['date'];
        }

        $Post->payment_date = $request->date;
        $currentDateTime = date('Y-m-d H:i:s');
        $Post->post_date=  $currentDateTime ;
        $Post->user_id =$id;
        $Post->save();

        if(!empty($allPosts)){

            return view('auth.posts', compact('allPosts'));
        }
        else{
           return view('post');
        }
    }
}
