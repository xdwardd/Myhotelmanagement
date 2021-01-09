@extends('layouts.app')

@section('content')
     <div class="container">
        <h3>
            Room Reservation Request
        </h3>    
           <div class="row">
             
                         @if (count($bookings) > 0)
                             
                        
                            @foreach ($bookings as $booking)
                            <div class="col-12 col-md-4">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$booking->name}}</h4>
                                        <p class="card-text"> Email: {{$booking->email}}
                                        <p class="card-text"> Phone: {{$booking->phone}}</p>
                                        <p class="card-text"> Reservation Date: {{$booking->date}}</p>
                                        <p class="card-text">Room Type</p>
                                         <ul>
                                             @foreach ($booking->type as $type)
                                                <li>{{$type}}</li>                                                 
                                             @endforeach
                                         </ul>
                                         <small>Request Date: {{$booking->created_at}}</small>
                                    </div>
                                    <form action="{{route('booking.destroy',$booking->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div>
                                            <button  style="border-radius:0px; width:100%;" class="btn btn-success">Confirmed</button>
                                        </div>
                                    </form>
                                    
                                </div>
                           
                             </div>
                           
                        @endforeach
                        @else
                        <p>No Booking Request </p>
                       @endif
            </div>
       
     </div>
       
   
@endsection