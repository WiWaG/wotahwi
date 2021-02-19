<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function roomsList()
    {
        return view('admin.rooms-list', ['rooms' => Room::all()]);
    }

    public function reservationsList()
    {
        return view('admin.reservations-list', ['reservations' => Reservation::all()]);
    }
}
