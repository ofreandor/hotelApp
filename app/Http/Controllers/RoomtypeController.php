<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        $roomtype = RoomType::all();
        
        return view('roomtype.index', compact('roomtype'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roomtype.create');
        
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $data = new RoomType();
        
        $data->title = $request->title;
        $data->detail = $request->detail;
        
        $data->save();
        
        return redirect('admin/create/roomtype')->with('success', 'Data has been Added successful');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
        $roomtype = RoomType::findorFail($id);
        
        return view('roomtype.show', compact('roomtype'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
         $roomtype = RoomType::findorFail($id);
        
        return view('roomtype.edit', compact('roomtype'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
        $data =  RoomType::find($id);
        
        $data->title = $request->title;
        $data->detail = $request->detail;
        
        $data->save();
        
        return redirect()->back()->with('success', 'Data has been Updated successful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        
        $data = RoomType::where('id',$id)->firstOrFail()->delete();
        
        return redirect()->back()->with('success', 'Data has been Deleted successful');
        
    }
}
