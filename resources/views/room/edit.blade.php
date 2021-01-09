@extends('layouts.app')


@section('content')
    
  <h3>Edit Rooms Details</h3>
        
  <form action="{{route('room.update',$room->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
     <div class="form-group">
         <label for="">Room No.</label>
         <input type="text" name="room_no"  id="" class="form-control" value="{{$room->room_no}}" placeholder="Room no">
     </div>
     <div class="form-group">
       <label for="">Room Type</label>
       <input type="text" name="room_type"  id="" class="form-control" value="{{$room->room_type}}" placeholder="Room type">
   </div>
   <div class="form-group">
       <label for="">Room Description</label>
        <textarea class="form-control" name="room_discription" id="editor1" value="" cols="30" rows="10">{{$room->room_discription}}</textarea>
   </div>
   <div class="form-group">
       <label for="">Room Price</label>
       <input type="number" name="room_price"  id="" class="form-control" value="{{$room->room_price}}" placeholder="Room Price">
   </div>
   <div>
    <label for="">Room Image</label>
    <br>
    <input type="file" name="img">
    </div>
    <div class="mt-2">
        <button class="btn btn-outline-primary">Save Room</button>
    </div>
   </form>
</div>
@endsection