<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Room;
use App\Hotel;
use App\Category;

class FindRoomsController extends Controller
{
    public function index($id, Request $request)
    {

        $hotels = Hotel::find($id);
        $time_from = $request->input('time_from');
        $time_to = $request->input('time_to');

        if ($request->isMethod('POST')) {
            $rooms = Room::with('booking')->whereHas('booking', function ($q) use ($time_from, $time_to) {
                $q->where(function ($q2) use ($time_from, $time_to) {
                    $q2->where('time_from', '>=', $time_to)
                       ->orWhere('time_to', '<=', $time_from);
                });
            })->orWhereDoesntHave('booking')->get();
        } else {
            $rooms = null;
        }
        // return view('hotels.book', compact('rooms', 'time_from', 'time_to', 'hotels'));
        return view('hotels.book')->with('hotels',$hotels)->with('time_from',$time_from)->with('time_to',$time_to)->with('rooms',$rooms);
    }
}
