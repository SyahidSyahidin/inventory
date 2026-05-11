<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\HotelRoomController;

Route::apiResource('room-types', RoomTypeController::class);
Route::apiResource('hotel-rooms', HotelRoomController::class);