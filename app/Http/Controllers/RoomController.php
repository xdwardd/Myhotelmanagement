<?php

namespace App\Http\Controllers;
use App\User;
use App\Room;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    public function index()
    {
        //

        $rooms = Room::all();
        return view('main',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (auth()->user()->id == 1) {
            return view('room.create');
        }
       abort('404');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
                'room_no' => 'required',
                'room_type' => 'required',
                'room_discription' => 'required',
                'room_price' => 'required',
                'img' => 'image|nullable|max:1999'
        ]);
        

         //handle image upload

         if ($request->has('img')) {
             # get filename with extension
             $filenameWithExt = $request->file('img')->getCLientOriginalName();
             # get just filename
             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            #get extension
            $extension = $request->file('img')->getClientOriginalExtension();
            #filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            #uploadfile
            $path = $request->file('img')->storeAs('public/cover_images',$filenameToStore);
         } else {
             $filenameToStore = 'default.jpg';
         }
         
        // create rooms

        $room = new Room();
        $room->room_no = $request->input('room_no');
        $room->room_type = $request->input('room_type');
        $room->room_discription = $request->input('room_discription');
        $room->room_price = $request->input('room_price');
        $room->user_id = auth()->user()->id;
        $room->img = $filenameToStore;   
        $room->save();

        return redirect()->route('details')->with('success', 'Room Created' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
        $room = Room::find($room->id);
        
            return view('room.show',compact('room'));
        
            
  
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        
        if (auth()->user()->id == 1) {
            $room = Room::find($room->id);
            return view('room.edit',compact('room'));
        }
        
        abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
        $request->validate([
            'room_no' => 'required',
            'room_type' => 'required',
            'room_discription' => 'required',
            'room_price' => 'required'
    ]);

       // img upload
       if ($request->has('img')) {
        # get filename with extension
        $filenameWithExt = $request->file('img')->getCLientOriginalName();
        # get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
       #get extension
       $extension = $request->file('img')->getClientOriginalExtension();
       #filename to store
       $filenameToStore = $filename.'_'.time().'.'.$extension;
       #uploadfile
       $path = $request->file('img')->storeAs('public/cover_images',$filenameToStore);
    }

            $room = Room::find($room->id);
            $room->room_no = $request->input('room_no');
            $room->room_type = $request->input('room_type');
            $room->room_discription = $request->input('room_discription');
            $room->room_price = $request->input('room_price');
            $room->user_id = auth()->user()->id;

            if ($request->hasFile('img')) {
                $room->img = $filenameToStore;
            }
            $room->save();
            
            return redirect()->route('details')->with('success', 'Room Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        // 
        if (auth()->user()->id == 1) {
            $room = Room::find($room->id);
                    if ($room->img != 'default.jpg') {
                        Storage::delete('public/cover_images/'.$room->img);
                    }
            $room->delete();
    
            return back()->with('success', 'Room Deleted');
        }
        abort('404');
    }
}
