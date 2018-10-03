<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\User;
use App\Category;
use App\Contact;
use App\Information;
use App\Map;
use Auth;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //$hotels = Hotel::all();
        $hotels = Hotel::orderBy('name')->paginate(6);
        return view('hotels.index')->with('hotels', $hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'name' => 'required',
            'description' => 'required',
            'cover_image' => 'image|nullable|max:3999'
        ]);

        // Handle File Upload
        if($request->hasFile('cover_image')){
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // SAVE HOTEL
        $hotel = new Hotel;
        $hotel->name = $request->input('name');
        $hotel->description = $request->input('description');
        //$hotel->(hname && admin == 2) = auth()->user()->hname && user()->admin; // THIS, LATER ON WILL BE FOR H.ADMIN
        $hotel->cover_image = $fileNameToStore;
        $hotel->save();

        return redirect()->back()->with('success', 'Hotel Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::find($id);
        $info = Information::where('hotel_id', $hotel->id)->first();
        return view('hotels.show')->with('hotel', $hotel)->with('info', $info);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'cover_image' => 'image|nullable|max:3999'
        ]);

        // Handle File Upload
        if($request->hasFile('cover_image')){
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

        }

        // SAVE HOTEL
        $hotel = Hotel::find($id);
        $hotel->name = $request->input('name');
        $hotel->description = $request->input('description');
        if($request->hasFile('cover_image')){
            $hotel->cover_image = $fileNameToStore;
        }
        $hotel->save();

        return redirect()->back()->with('success', 'Hotel Created Successfully!');
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

    public function gallery($id)
    {
        $hotels = Hotel::find($id);
        return view('hotels.gallery')->with('hotels', $hotels);
    }

    public function contact($id)
    {
        $hotels = Hotel::find($id);
        $cont = Contact::where('hotel_id', $hotels->id)->first();
        $map = Map::where('hotel_id', $hotels->id)->first();
        return view('hotels.contact')->with('hotels', $hotels)->with('cont', $cont)->with('map', $map);
    }

    public function rooms($id)
    {
        // $hotel_id =  auth()->user()->hotel_id;
        // 
        $hotels = Hotel::find($id);
        $category = Category::where('hotel_id', $hotels->id)
                           ->orderBy('name', 'desc')->paginate(3);
        // $category = Category::all();
        return view('hotels.rooms')->with('hotels', $hotels)->with('category', $category);
    }

    public function geninfo()
    {
        
        return view('user.hoteladmin.geninfo');
    }

    public function dispinfo()
    {
        $id = auth()->user()->hotel_id;
        return view('user.hoteladmin.dispinfo')->with('id',$id);
    }

    public function galinfo()
    {
        return view('user.hoteladmin.gallery');
    }

    public function coninfo()
    {
        return view('user.hoteladmin.contact');
    }

    public function repinfo()
    {
        return view('user.hoteladmin.report');
    }

    // REDIRECTION OF BOOK NOW
    public function booking($id)
    {
        $hotels = Hotel::find($id);
        return view('hotels.book')->with('hotels',$hotels);
    }

    public function map()
    {
        return view('user.hoteladmin.map');
    }


}

