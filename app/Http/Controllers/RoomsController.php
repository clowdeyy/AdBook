<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Hotel;
use App\User;
use App\Category;
use DB;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'room_number' => 'required',
            'floor' => 'required',
        ]);
        // $cat_id = DB::table('categories')->where('name',$request->cat_id)->first();
        $rooms = new Room;
        $rooms->cat_id = $request->cat_id;
        $rooms->room_number = $request->input('room_number');
        $rooms->floor = $request->input('floor');
        $rooms->save();

        return redirect()->back()->with('success', 'Room Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createroom(){
        $hotel_id =  auth()->user()->hotel_id;
        $category = Category::where('hotel_id', $hotel_id)
                                ->orderBy('name', 'desc')->get();
        return view('user.hoteladmin.create_room')->with('category', $category);
    }
}
