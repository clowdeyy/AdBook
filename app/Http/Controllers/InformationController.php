<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;

class InformationController extends Controller
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
            'desc1' => 'required',
            'desc2' => 'nullable',
            'offer1' => 'required',
            'offer2' => 'nullable',
            'offer3' => 'nullable',
            'offer4' => 'nullable',
            'offer5' => 'nullable',
        ]);

        $hotel_id =  auth()->user()->hotel_id;
        $info = new Information;
        $info->hotel_id = $hotel_id;
        $info->name = $request->input('name');
        $info->desc1 = $request->input('desc1');
        $info->desc2 = $request->input('desc2');
        $info->offer1 = $request->input('offer1');
        $info->offer2 = $request->input('offer2');
        $info->offer3 = $request->input('offer3');
        $info->offer4 = $request->input('offer4');
        $info->offer5 = $request->input('offer5');
        $info->save();

        return redirect()->back()->with('success', 'Information Successfully Updated!');
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
}
