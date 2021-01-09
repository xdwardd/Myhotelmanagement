
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>MyHotel</title>
    

    <style>  .tabs{
                background: transparent;
                }
             .tabs .indicator{
                background: rgb(108, 196, 255);
            }
            .tabs .tab a:focus, .tabs .tab a:focus.active{
                background: transparent;
            }
            #services{
                margin: auto;
            }
           .section-rooms .row{
               margin-left: 2rem;
               margin-right: 2rem;
           }
           .fab{
               padding-right: 1rem;
           }
                .icon_style{
            position: absolute;
            right: 10px;
            top: 10px;
            font-size: 20px;
            color: white;
            cursor:pointer; 
        }
       
    </style>
               
</head>

<body id="home" class="scrollspy"> 

      <!--Navbar-->

      <div class="navbar-fixed">
          <nav class="light-blue">
              <div class="container">
                  <div class="wrapper">
                    
                      <a href="#" class="brand-logo">MyHotel</a>
                      <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                          <i class="material-icons">menu</i>
                      </a>
                      <ul class="right hide-on-med-and-down">
                          <li>
                              <a href="#services">Services</a>
                          </li>
                          <li>
                              <a href="#rooms">Rooms</a>
                          </li>
                          <li>
                              <a href="#gallery">Gallery</a>
                          </li>
                          <li>
                              <a href="#reserve">Reserve Room</a>
                          </li>

                          @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                     
                       <li>
                         
                              <a class='dropdown-trigger' href='#' data-target='dropdown1'>
                                <i class="fab fa-facebook"></i>{{Auth::user()->name }}
                                </a>
                            </li>
                          <ul id='dropdown1' class='dropdown-content' style="background: #05a3f7">
                            <li><a href="/" class="white-text">{{ Auth::user()->name }}</a></li>

                                @if (auth()->user()->id == 1)
                                <li><a href="home" class="white-text">Dashboard</a></li>
                                @endif
                              
                            
                            <li class="divider" tabindex="-1"></li>

                            <li><a class="white-text" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                             </form></li>
                         
                         
                          </ul> 
                      </ul>
                    @endguest
                    
                  </div>
              </div>
          </nav>
      </div>
      <ul class="sidenav" id="mobile-nav">
        <li>
            <a href="#services">Services</a>
        </li>
        <li>
            <a href="#rooms">Rooms</a>
        </li>
        <li>
            <a href="#gallery">Gallery</a>
        </li>
        <li>
            <a href="#reserve">Reserve Room</a>
        </li>
      </ul>  
                  
      
      
           
      
                    @if (session('success'))
                        <div class="row" id="alert_box">
                            <div class="col s12 m12">
                            <div class="card green darken-1">
                                <div class="row">
                                <div class="col s12 m10">
                                    <div class="card-content white-text">

                                     <p> {{session('success')}}</p>
                                           
                                </div>
                                </div>
                                <div class="col s12 m2">
                                <i class="fa fa-times icon_style" id="alert_close" aria-hidden="true"></i>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                    @endif
      <!--Section Slider-->
      <section class="slider">
       
        
            <ul class="slides">
                <li>
                    <img src="img/hotel2.jpg" alt="">
                    <div class="caption center-align">
                        <h2>Take Your Dream Vacation</h2>
                    </div>
                </li>
                <li>
                    <img src="img/resort3.jpg" alt="">
                    <div class="caption center-align">
                        <h2>Travel With Low Budget</h2>
                    </div>
                </li>
                <li>
                    <img src="img/hotel.jpg" alt="">
                    <div class="caption center-align">
                        <h2>Enjoy Every Moment</h2>
                    </div>
                </li>
            </ul>
      </section>

      <!--Services-->

      <section class="section section-services grey lighten-2  scrollspy" id="services">
          <div class="container">
            <h4 class="center">
                <span class="teal-text">Hotel</span> Services
              </h4>
                <div class="row">
                    <div class="col s12 l4">
                        <h3 class="blue-text text-darken-2">Have Fun<i class="fas fa-staylinked    "></i></h3>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus aspernatur consequuntur vero ut repudiandae ab ipsa consequatur repellendus, natus neque.</p>
                    </div>
                    <div class="col s12 l6 offset-l2">
                       <ul class="tabs">
                           <li class="tab col s6">
                               <a href="#catering" class="blue-text text-darken-2">Catering</a>
                           </li>
                           <li class="tab col s6">
                                <a href="#carrental" class="blue-text text-darken-2">Car Rental</a>
                            </li>
                       </ul>
                       <div class="col s12" id="catering">
                           <p class="flow-text blue-text text-darken-2">Catering</p>
                           <p class="grey-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis voluptas porro inventore quia aut rerum ratione quisquam veniam reprehenderit non.
                           </p>
    
                       </div>
                       <div class="col s12" id="carrental">
                            <p class="flow-text blue-text text-darken-2">Car Rental</p>
                            <p class="grey-text">
                                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis voluptas porro inventore quia aut rerum ratione quisquam veniam reprehenderit non.
                            </p>
     
                        </div>
                    </div>
                </div>
          </div>
        
     </section>

     <!-- ROOMS -->

     <section id="rooms"  class="section section-rooms scrollspy">
        <h4 class="center">
            <span class="teal-text">Hotel</span> Rooms
          </h4> 
            
                
                <div class="row">
                    @foreach ($rooms as $room)
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                            <img src="/storage/cover_images/{{$room->img}}">
                            <h5 class="card-title">{{$room->room_type}}</h5>
                            </div>
                            <div class="card-content" style="font-weight: 600">
                                  <p>Room Price: {{$room->room_price}}</p>
                            </div>
                            <a class="waves-effect waves-light light-blue btn" style="width: 100%; border-radius: 0%; border-radius: 0%" href="{{route('room.show', $room->id)}}">View Room</a>
                        </div>
                        </div>
                        @endforeach
                 
                </div>
                 
            
                    
     </section>
   
    
        
     <!-- Gallery -->


      <section id="gallery" class="section grey lighten-4 section-gallery scrollspy">
        <div class="container">
          <h4 class="center">
            <span class="teal-text">Photo</span> Gallery
          </h4>
          <div class="row">
            <div class="col s12 l4">
                    <img src="img/gallery1.jpg" alt="" srcset="" class="responsive-img materialboxed">
            </div>
            <div class="col s12 l6 offset-l1">
                <h3 class="blue-text text-darken-2">
                        Travel
                </h3>
                <p class="grey-text">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat magnam culpa accusantium aliquam id corrupti aliquid inventore animi impedit nobis?
                </p>
            </div>
        </div>
        <div class="row">
                <div class="col s12 l4 push-l7">
                        <img src="img/gallery2.jpg" alt="" srcset="" class="responsive-img materialboxed">
                </div>
                <div class="col s12 l6 pull-l5 right-align offset-l1">
                    <h3 class="blue-text text-darken-2">
                            Memories
                    </h3>
                    <p class="grey-text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat magnam culpa accusantium aliquam id corrupti aliquid inventore animi impedit nobis?
                    </p>
                </div>
            </div>
            <div class="row">
                    <div class="col s12 l4">
                            <img src="img/gallery3.jpg" alt="" srcset="" class="responsive-img materialboxed">
                    </div>
                    <div class="col s12 l6 offset-l1">
                        <h3 class="blue-text text-darken-2">
                           Enjoy
                        </h3>
                        <p class="grey-text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat magnam culpa accusantium aliquam id corrupti aliquid inventore animi impedit nobis?
                        </p>
                    </div>
                </div>
       
      </section>

    
    <!-- Parrallax -->
    
    <div class="parallax-container">
        <div class="parallax">
            <img src="img/gallery12.jpg" alt="" class="responsive-img">
        </div>
    </div>
    
        <!-- Contacts -->
        
        <section id="reserve" class="section section-contact scrollspy">
                <div class="container">
                    <h4 class="center">
                        <span class="teal-text">Room</span> Reservation
                      </h4>
                    <div class="row">
                        <div class="col s12 l5">
                            <div class="card-panel blue white-text center">
                                 
                                  <h5>Room Reservation</h5>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente optio veritatis quaerat quis! Iure amet esse provident illo quibusdam mollitia.
                                  </p>
                            </div>
                            <ul class="collection with-header">
                                <li class="collection-header"> 
                                  <h5>Location</h5>
                                </li>
                                <li class="collection-item">MyHotel Mania Inc.</li>
                                <li class="collection-item">Bogo st, 123</li>
                                <li class="collection-item">Bogo City Cebu City, Philippines</li>
      
                            </ul>
                        </div>
                        <div class="col s12 l5 offset-l2">
                      
                         
                             <form action="{{route('booking.store')}}" method="POST">
                                  @csrf 
                                
                                         <div class="input-field">
                                             <i class="material-icons prefix">account_circle</i>
                                            <input type="text" id="name" name="name"
                                            value="{{old('name')}}"
                                            >
                                            <label for="name">Fullname</label>
                                            @if ($errors->has('name'))
                                            <p class="help" style="color: red; margin-left:2.5rem;">{{$errors->first('name')}}</p>
                                                
                                            @endif
                                        </div>
                                        <div class="input-field">
                                            <i class="material-icons prefix">email</i>
                                           <input type="email" id="email" name="email"
                                           value="{{old('email')}}">
                                           <label for="email">Your Email</label>
                                           @if ($errors->has('email'))
                                           <p class="help" style="color: red; margin-left:2.5rem;">{{$errors->first('email')}}</p>
                                               
                                           @endif

                                           
                                         
                                       </div>
                                       <div class="input-field">
                                        <i class="material-icons prefix">phone</i>
                                       <input type="number" id="phone" name="phone"
                                       value="{{old('email')}}">
                                       <label for="phone">Phone</label>
                                       @if ($errors->has('phone'))
                                       <p class="help" style="color: red; margin-left:2.5rem;">{{$errors->first('phone')}}</p>
                                           
                                       @endif
                                     </div>
                                        {{-- <div class="input-field">
                                                <i class="material-icons prefix">message</i>
                                               <textarea type="text" id="message" class="materialize-textarea"></textarea>
                                               <label for="message">Enter Message</label>
                                        </div>
                                            --}}
                                        <div class="input-field">
                                            <i class="material-icons prefix">date_range</i>
                                               <input type="text" name="date" class="datepicker" 
                                               value="{{old('date')}}">
                                               <label for="datepicker">Reservation Date ...</label>
                                               @if ($errors->has('date'))
                                               <p class="help" style="color: red; margin-left:2.5rem;">{{$errors->first('date')}}</p>
                                                   
                                               @endif
                                         </div>
                                           
                                            <p>Type of Room...</p>

                                            <p>
                                                <label>
                                                    <input type="checkbox" name="type[]" value="Standard Room">
                                                    <span>Standard</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                     <input type="checkbox" name="type[]" value="Modern Room">
                                                     <span>Modern</span>
                                                     </label>
                                                </p>
                                            <p>
                                                 <label>
                                                 <input type="checkbox" name="type[]" value="Superior Room">
                                                 <span>Superior</span>
                                                 </label>
                                            </p>
                                            @if ($errors->has('type'))
                                            <p class="help" style="color: red; margin-left:2.5rem;">{{$errors->first('type')}}</p>
                                                
                                            @endif
                                      
                                       
                                            <button class="btn blue">Submit</button>
                                      
                                       
                            </form>
      
                        </div>
                    </div>
                </div>
            </section>

    
            <!--footer-->

          
      <section class="section section-follow light-blue darken-2 white-text center">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h4>Follow MyHotel</h4>
                    <p>Follow us on social media for special offers</p>
                    <a href="#" class="white-text">
                        <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a href="#" class="white-text">
                        <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a href="#" class="white-text">
                        <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                    <a href="#" class="white-text">
                        <i class="fab fa-google-plus fa-2x"></i>
                    </a>
                </div>
            </div>
            
            <p class="text-center">MyHotel Resort &copy; Edward Catapan</p>
        </div>
    </section>
    

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <script>
     //burger menu
     $(document).ready(function(){
            $('.sidenav').sidenav();
    //materialboxed
            $('.materialboxed').materialbox();
    //parallax
            $('.parallax').parallax();
     //tabs
            $('.tabs').tabs();
    //datepicker
            $('.datepicker').datepicker({

            });
    //tooltip
            $('.tooltipped').tooltip();
    //scrollspy
            $('.scrollspy').scrollSpy();
    //dropdown
         
            $('.dropdown-trigger').dropdown();

   //alert
                    $('#alert_close').click(function(){
            $( "#alert_box" ).fadeOut( "slow", function() {
            });
        });
    //slider
            const slider = document.querySelector('.slider');
             M.Slider.init(slider, {
            indicators: false,
            height: 500,
            transition: 500,
            interval: 6000
        });
     });
   
    </script>
</body>
</html> 