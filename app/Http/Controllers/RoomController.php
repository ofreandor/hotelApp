<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $room = Room::with('Roomtype');
        dd($room->Roomtype->title);
        
        return view('room.index', ['room' => $room]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new Room();
        
        $data->title = $request->title;
        $data->detail = $request->detail;
        
        $data->save();
        
        return redirect('admin/create/room')->with('success', 'Data has been Added successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $room = Room::findorFail($id);
        
        return view('room.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $room = Room::findorFail($id);
        
        return view('room.edit', compact('room'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
