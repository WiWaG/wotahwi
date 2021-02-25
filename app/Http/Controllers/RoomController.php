<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rooms.index', ['rooms' => Room::select('id', 'name', 'price_night as price')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rooms-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'room.name' => 'required|string|max:255',
            'room.price_night' => 'required|numeric|min:0|max:9999',
            'room.description' => 'required|string',
          ];

        foreach ($request->get('images') as $key => $val) {
            $rules["images.$key.name"] = 'nullable|string|max:255';
            $rules["images.$key.file_path"] = 'required|string';
        }

        $validated = $request->validate($rules);

        $room = new Room($validated['room']);
        $room->save();

        foreach ($validated['images'] as $attributes) {
            $attributes['room_id'] = $room->id;
            $image = new Image($attributes);
            $image->save();
        }

        return redirect(route('admin.rooms.list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('rooms.show', ['room' => Room::findOrFail($room->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('admin.rooms-edit', ['room' => Room::findOrFail($room->id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        // validate request
        // save update to db
        $room->update($request->all());

        // return message
        return redirect(route('admin.rooms.list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect(route('admin.rooms.list'));
    }
}
