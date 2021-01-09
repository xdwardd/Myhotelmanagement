
<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link rel="stylesheet" href="css/main.css">
   
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
      crossorigin="anonymous"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>MyHotel</title>
    
 
  </head>

   
  <body id="home" class="scrollspy"> 
      <!--Navbar-->
      <div class="navbar-fixed">
          <nav class="light-blue">
              <div class="container">
                      <a href="/" class="brand-logo">MyHotel</a>  
              </div>
          </nav>
      </div>
     <div class="container">
         
        <section>
            <div class="row" style="margin-top: 1rem;">

                <div class="col s12 m6 l6">
                    <div class="slider">
                        <ul class="slides">
                            <li>
                                <img src="/storage/cover_images/{{$room->img}}" alt="">
                            </li>
                            <li>
                                <img src="/img/roomdetails.jpg" alt="">
                            </li>
                        </ul>
                    </div>
                   
                </div>
                <div class="col s12 m6 l6">
                   
                    <table class="responsive-table">
                        <thead>
                        <tr>
                            <th>Room No.</th>
                            <th>Room Type</th>
                            <th>Room Price</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>{{$room->room_no}}</td>
                            <td>{{$room->room_type}}</td>
                            <td> ₱ {{$room->room_price}}</td>
                        </tr>
                    </table>

                    <div>
                        <h5>Room Description</h5>
                        <hr>
                        {!!$room->room_discription!!}
                    </div>
                    
                    <div style="display: flex; justify-content:space-between; margin-top: 2rem;" >
                        <div>
                            <a href="/" class="btn grey">Back</a>
                        </div>
                        <div>
                         
                        </div>
                    </div>
                </div>
            </div>
    </section>
   
     </div>
       
        
                   
           
     
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
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').slider();
        });
    </script>
  </body>
</html>
      