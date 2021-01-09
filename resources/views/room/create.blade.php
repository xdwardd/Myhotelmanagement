@extends('layouts.app')

@section('content')
    <div class="container">
       
    
        <h3>Add Rooms</h3>
        <form id="#room-form" action="/room" method="POST" enctype="multipart/form-data">
         @csrf
          <div class="form-group">
              <label for="">Room No.</label>
              <input type="text" name="room_no"  
              id="" class="form-control" 
              value="{{old ('room_no')}}"
              placeholder="Room no">
          </div>
          <div class="form-group">
            <label for="">Room Type</label>
            <input type="text" name="room_type"  
            id="" class="form-control" 
            value="{{old ('room_type')}}"
            placeholder="Room type">
        </div>
        <div class="form-group">
            <label for="">Room Description</label>
             <textarea 
             id="editor1"
             cols="30" rows="10"
             class="form-control" 
             name="room_discription"
             
             
            >
             {{old('room_discription')}}
            </textarea>
        </div>
    
        <div class="form-group">
            <label for="">Room Price</label>
            <input type="number" name="room_price"
              id="" class="form-control" 
              value="{{old ('room_price')}}"
              placeholder="Room Price">
        </div>
        
        <div>
            <label for="">Room Image</label>
            <br>
            <input type="file" name="img">
        </div>
         <div class="mt-2">
             <button type="submit" class="btn btn-outline-primary">Save Room</button>
         </div>

        
       
        </form>

      

    </div>
   
   
@endsection