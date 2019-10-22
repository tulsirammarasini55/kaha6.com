<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;




class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response




     */
    /*
     public function site()

    {
    $users = user::all();
    $posts =  post::all();
    return view('profile', compact('users', 'posts'));
    }
    



   

    */
    public function profile()
    {
        return view('profile',array('user' =>Auth::user()));
    }
    
     public function update_avatar(Request $request)
    {
        // handle the user upload  of avatars
        if($request ->hasfile('avatar'))
        {
            $avatar =$request->file('avatar');
            $filname = time(). '.' .$avatar ->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300) ->save(public_path('/images/avatars/' .$filname));

            $user =Auth::user();
            $user ->avatar =$filname;
            $user ->save();

        }

        return view('profile',array('user' =>Auth::user()));



    }



}