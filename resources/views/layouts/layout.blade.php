<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="icon" href="{{asset('assets/img/Fevicon.png')}}" type="image/png">

  <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/css/all.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/linericon/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

  <style>
    .header_area.navbar_fixed .main_menu{
      background: {{$settings['header_color']}}
    }
  </style>
</head>

<body>
<!--================Header Menu Area =================-->
<header class="header_area">
<div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
               
              @foreach ($menu as $slug => $title)
              <li class="nav-item active"><a class="nav-link" href="{{$slug}}">{{$title}}</a></li> 
              @endforeach
              
              <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
            </ul>

            <ul class="navbar-right">
              <li class="nav-item">
                <a class="button button-header bg" href="{{route('login')}}">Painel</a>
              </li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->   

  <main class="side-main">
    @yield('content')
  </main>

  <script src="{{asset('assets/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('assets/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('assets/js/mail-script.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>