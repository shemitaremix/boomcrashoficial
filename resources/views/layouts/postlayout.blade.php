<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com">

  <title>@yield('title')</title>

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

</head>
<body>

  @php
    use Illuminate\Support\Facades\Auth;
    if (Auth::check()){
        $name = Auth::user()->name;
    }
  @endphp
  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float">
      <div class="container">
        <a href="index.html" class="navbar-brand">Digi<span class="text-primary">Gram.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">

            <li class="{{! Route::is('posts.index') ?: 'active'}}">
              <a href="{{route('posts.index')}}" class="nav-link">Booms!!</a>
            </li>
            

            
            
            <li class="{{! Route::is('posts.services') ?: 'active'}}">
                <a href="{{route('posts.services')}}" class="nav-link">Boom Craft</a>
            </li>
            
            

            <li class="{{! Route::is('posts.about') ?: 'active'}}">
                <a href="{{route('posts.about')}}" class="nav-link">Boomers-Dekstop</a>
            </li>
            <li class="{{! Route::is('posts.about') ?: 'active'}}">
                <a href="http://ricks-mortys.herokuapp.com" class="nav-link">Un dato curioso sobre Rick & Morty</a>
            </li>
          </ul>

          <a  class="nav-link">Perfil: {{$name}}</a>
          <a href="{{route('logout')}}" class="nav-link">Cerrar sesion</a>
        </div>
      </div>
    </nav>

    @yield('header')
    
  </header>

  @yield('contenidillo')

  <footer class="page-footer">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-3 py-3">
          <h3>Elaborado por<span class="text-primary">Isra Shemita Rodriguez</span></h3>
          <p>Colaboradores: Erick Kevin Sanchez Garrido, Lopez guerrero Jose luis</p>

          <p><a href="#" >digigram@mail.com</a></p>
          <p><a href="#">+00 1122 3344 5566</a></p>
        </div>
       
        
       
      </div>

      <div class="row">
        <div class="col-sm-6 py-2">
          <p id="copyright">&copy; 2022 <a href="https://github.com/shemitaremix">Shema</a>. All rights reserved</p>
        </div>
        
      </div>
    </div> <!-- .container -->
  </footer> <!-- .page-footer -->


  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="../assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="../assets/js/google-maps.js"></script>

  <script src="../assets/js/theme.js"></script>


</body>
</html>