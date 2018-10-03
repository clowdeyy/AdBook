<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Hotel as Hotel;
use App\Category as Category;
use App\Room;
use DB;
use Auth;

class AdminController extends Controller
{

    // REGISTER ADMIN VIEW
    public function hoteladmin(){
        $hotels = Hotel::all();
        $users = User::all();
        return view('user.admin.create_user')->with('users', $users)->with('hotels', $hotels);
    }

    // SAVING THE CREATE USER
    public function saveadmin(Request $request){
        $this->validate($request, [
                'hname' => 'required|max:20',
                'fname' => 'required|max:20',
                'lname' => 'required|max:20',
                'contact' => 'required|max:20',
                'email' => 'required|email|max:30|unique:users',
                'password'=> 'required|min:10',
            ]);
           
            $hotel_id = DB::table('hotels')->where('name',$request->hname)->first();
            // return $hotel_id;
            $user = new User;
            $user->hotel_id = $hotel_id->id;
            $user->fname = $request->input('fname');
            $user->lname = $request->input('lname');
            $user->contact = $request->input('contact');
            $user->email = $request->input('email');
            $user->password =  bcrypt($request['password']);
            $user->admin = 2;
            $user->save(); 

            return redirect()->back()->with('yes', 'Hotel Admin successfully created!');
            
    }

    // DISPLAYS THE VIEW USER
    public function viewuser(Request $request){
        $hotels = DB::table('hotels')
                        ->join('users' , 'users.hotel_id', '=', 'hotels.id')->paginate(5);
        // $hotel_id = DB::table('hotels')->where('name',$request->hname)->first();
        // $disp = new User;
        // $disp->hotel_id = $hotel_id->id;
        return view('user.admin.view_user')->with('hotels', $hotels);
    }

    // DISPLAYS VIEW HOTEL
    public function viewhotel(){
        // $hotels = Hotel::all();
        $hotels = Hotel::orderBy('name', 'desc')->paginate(3);
        // $hotels = Hotel::all()->toArray();
        // $hotels =json_encode($hotels);
        // return view('user.admin.view_hotel', compact('hotels'));
        return view('user.admin.view_hotel')->with('hotels', $hotels);
    }
    // CREATE HOTEL VIEW
    public function createhotel(){
        return view('user.admin.create_hotel');
    }


    // GUEST
    // EDIT GUEST PROFILE
    public function guestedit(){
        return view('user.guest.editprofile');
    }
    // TRANSACTIONS
    public function transac(){
        return view('user.guest.transactions');
    }


    // HOTEL ADMIN
    // DISPLAY REQUESTS
    public function viewrequests(){
        // $hotels = Hotel::all();
        return view('user.hoteladmin.requests');
    }
    // DISPLAYS THE CATEGORY
    public function viewcategory(){
        $hotel_id =  auth()->user()->hotel_id;
        $category = Category::where('hotel_id', $hotel_id)
                                ->orderBy('name', 'desc')->paginate(3);                     
        return view('user.hoteladmin.view_category')->with('category', $category);
    }
      // DISPLAYS THE ROOM
      public function viewroom(){
        $hotel_id =  auth()->user()->hotel_id;
        $category = Category::where('hotel_id', $hotel_id)->first();
        // return $category->id;
        $rooms = Room::where('cat_id', $category->id)->paginate(5);
        return view('user.hoteladmin.view_rooms')->with('rooms', $rooms)->with('category', $category);
    }


}
