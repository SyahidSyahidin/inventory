<?php

namespace App\Http\Controllers;

use App\Models\HotelRoom; // Import model yang benar
use Illuminate\Http\Request;

class HotelRoomController extends Controller
{
    public function index() {
        return response()->json(HotelRoom::all(), 200);
    }

    public function store(Request $request) {
        $data = HotelRoom::create($request->all());
        return response()->json($data, 201);
    }

    public function show($id) {
        return response()->json(HotelRoom::findOrFail($id), 200);
    }

    public function update(Request $request, $id) {
        $hotelRoom = HotelRoom::findOrFail($id);
        $hotelRoom->update($request->all());
        return response()->json($hotelRoom, 200);
    }

    public function destroy($id) {
        HotelRoom::destroy($id);
        return response()->json(['message' => 'Deleted'], 200);
    }
}