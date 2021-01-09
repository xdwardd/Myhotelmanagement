@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged as Administrator!') }}
                    <hr>
                    <ul>
                        <li class="mb-2">
                            <a class="btn btn-outline-primary" href="{{route('booking.index')}}">View Bookings</a>
                        </li>
                            <li class="mb-2">
                                <a class="btn btn-outline-secondary" href="/details">View Room Details</a>
                            </li>
                            <li>
                                <a class="btn btn-outline-success" href="{{route('room.create')}}">Create Room</a>
                            </li>
                           
                           <hr>

                           <i>Note:</i>
                           <p>Cant Upload Image because heroko doesn't provided free file storage</p>
                           <p>But you can clone same project in my github account <a href="https://github.com/xdwardd/myhotelmanagement" target="_blank">here</a> and run it in localhost server</p>
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
