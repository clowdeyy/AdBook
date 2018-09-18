<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\User;

class AdminController extends Controller
{

    // REGISTER ADMIN
    public function hoteladmin(){
        return view('user.admin.create_user');
    }

    // public function hoteladmin_new(Request $request){
    //     $this->validate($request, [
    //             'fname' => 'required|max:20',
    //             'lname' => 'required|max:20',
    //             'contact' => 'required|max:20',
    //             'email' => 'required|email|max:30|unique:users',
    //             'password'=> 'required|max:12',
    //             'admin' => ''
    //         ]);
           
    //         $user = new User;
    //         $user->fname = $request['fname'];
    //         $user->lname = $request['lname'];
    //         $user->contact = $request['contact'];
    //         $user->email = $request['email'];
    //         $user->password =  bcrypt($request['password']);
    //         $user->admin = $request['admin'];
    //         $user->save(); 

    //         return redirect()->back()->with('yes', 'Hotel Admin successfully created!');

    // }

    // VIEW HOTEL
    public function viewuser(){
        return view('user.admin.view_user');
    }

    // VIEW HOTEL
    public function viewhotel(){
        return view('user.admin.view_hotel');
    }
    // CREATE HOTEL
    public function createhotel(){
        return view('user.admin.create_hotel');
    }
}
