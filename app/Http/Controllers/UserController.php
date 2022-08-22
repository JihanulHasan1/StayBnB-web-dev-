<?php

namespace App\Http\Controllers;

use App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Ads;
use App\Models\Post;
use App\Models\PostRequest;

class UserController extends Controller
{

    
   
    public function dash()
    {
        $Dashboard = Ads::all();
        return view('auth.dashboard', ['dash' => $Dashboard]);
    }

    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.signup');
    }
    
    //Register

    public function store(Request $request)
    {
        $request->validate(
            [
                'Uname' => 'required',
                'Uemail' => 'required|email',
                'Upass' => 'required|min:5|max:12',
                'term' => 'accepted'
            ],
            [
                'Uname.required' => 'The name field is required',
                'Uemail.required' => 'The email field is required',
                'Upass.required' => 'The password field is required',
                'Upass.required|min:5' => 'The password must be at least 5 characters',
                'Upass.required|max:12' => 'The password cannot be more than 12 characters'
            ]
        );


        if ($request->has('term')) {
            $User = new User;
            $User->user_id = uniqid();
            $User->name = $request->Uname;
            $User->email = $request->Uemail;
            if ($request->Upass == $request->re_pass) {
                $User->password = Hash::make($request->Upass);
            }
            $save = $User->save();
            if ($save) {
                return redirect('/home');
            } else {
                return redirect('/auth/register');
            }
        } else {
        }
    }


    
    //LOGIN

    public function check(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required|min:5|max:12'
        ]);

        $userInfo = User::where('email', '=', $request->email)->first();

        $Dashboard = Ads::all();

        if (!$userInfo) {

            return back()->with('fail', 'No User Found with this email');
        } else {
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('loggedUser', $userInfo->user_id);
                return view('auth.dashboard', ['dash' => $Dashboard, 'loggedUser' => $userInfo]);
                //$this->dash();
            } else {
                return back()->with('fail', 'incorrect password');
            };
        }
    }

    

    //LOGOUT
    public function logout()
    {
        if (session()->has('loggedUser')) {
            session()->pull('loggedUser');
            return redirect('staybnb/');
        }
    }


    //dashboard
    public function dashboard()
    {
        $data = ['loggedUserInfo' => User::where('user_id', '=', session('loggedUser'))->first()];
        return view('auth.dashboard', $data);
    }


    //profile
    function profile($id)
    {
        $result = array();
        $postrequests= array();
        $userInfo = User::where('user_id', '=', $id)->first(); 
        $posts=Post::all(); 
        $requests =PostRequest::all();
        foreach ($posts as $p) {
        if ($id==$p->user_id) {
            array_push($result, $p);
        }
        }
        foreach ($requests as $r) {
            if ($id==$r->user_id) {
                foreach ($posts as $p) {
                    if ($r->post_id==$p->post_id) {
                        //echo $p;
                       array_push($postrequests, $p);
                    }
               
                }

            }
        }
        return view('auth.user_profile',['loggedUser'=>$userInfo,'result'=>$result,'request'=>$postrequests]);
        
    }


    //allposts
    function allpostS()
    {
        $data = ['loggedUserInfo' => User::where('user_id', '=', session('loggedUser'))->first()];
        return view('auth.dashboard', [$data]);
    }


//host
    function host($id)
    {
       $User= User::where('user_id', '=',$id)->first();
        return view('post',['user'=>$User]);
    }



//serach
function search($id){

    $User= User::where('user_id', '=',$id)->first();
    return view('auth.search',['user'=>$User]);

}


    //see all registered users
    public function allusers()
    {
        $users = User::all();
        return view('users', ['users' => $users]);
    }


}
