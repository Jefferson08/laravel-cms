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

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3 mb-4 mb-md-0 single-footer-widget">
              <h4>Contact information</h4>
              <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-headphone"></i></span>
              <div class="media-body">
                  <h3><a href="tel:454545654">Phone</a></h3>
                  <p>{{$settings['phone']}}</p>
              </div>
              </div>
              <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-email"></i></span>
              <div class="media-body">
                  <h3>Email</h3>
                  <p><a href="mailto:support@colorlib.com">{{$settings['email']}}</a></p>
              </div>
              </div>
          </div>
            <div class="col-xl-4 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                <h4>Newsletter</h4>
                <p>You can trust us. we only send promo offers,</p>
                <div class="form-wrap" id="mc_embed_signup">
                    <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                    method="get" class="form-inline">
                        <input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                        required="" type="email">
                        <button class="click-btn btn btn-default">subscribe</button>
                        <div style="position: absolute; left: -5000px;">
                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                        </div>

                        <div class="info"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom row align-items-center text-center text-lg-left">
            <p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-dribbble"></i></a>
                <a href="#"><i class="fab fa-behance"></i></a>
            </div>
        </div>
    </div>
  </footer>
<!-- ================ End footer Area ================= -->

  <script src="{{asset('assets/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{asset('assets/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('assets/js/mail-script.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>