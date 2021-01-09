@extends('layouts.app')


@section('content')
    <h3>
        Room Details
    </h3>
     
    <div class="row">
        @foreach ($rooms as $room)
        <div class="col-sm-12 col-md-4">
           
                    <div class="card shadow-sm mb-4">
                        <img class="card-img-top" src="/storage/cover_images/{{$room->img}}" alt="">
                        <div class="card-body">
                            <h4 class="card-title">{{$room->room_type}}</h4>
                            <p class="card-text">{{$room->room_no}}
                            <br>
                               Room Price:   {{$room->room_price}}
                            </p>
                            <div style="display: flex">
                                <div style="margin-right: 10px">
                                    <a href="{{route('room.edit',$room->id)}}" class="btn btn-sm btn-success">Edit</a>
                                </div>
                                <div>
                                    <form action="{{route('room.destroy',$room->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                       
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        
                                    </form>
                                </div>
                               
                            </div>
                        </div>
                       
                        
                    </div>
        </div>
         @endforeach

    </div>
    
@endsection