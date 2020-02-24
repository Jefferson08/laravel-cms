@extends('layouts.layout')

@section('content')

<section class="hero-banner mb-30px">
<div class="container">
    <div class="row">
    <div class="col-lg-7">
        <div class="hero-banner__img">
        <img class="img-fluid" src="{{asset('/assets/img/banner/hero-banner.png')}}" alt="">
        </div>
    </div>
    <div class="col-lg-5 pt-5">
        <div class="hero-banner__content">
        <h1>Advanced software made simple</h1>
        <p>Vel aliquam quis, nulla pede mi commodo tristique nam hac Luctun torquent velit felis commodo pellentesque nulla cras vel aliqua quisan nulla pede mi commoda</p>
        <a class="button bg" href="#">Get Started</a>
        </div>
    </div>
    </div>
</div>
</section>

<!--================ Feature section start =================-->      
<section class="section-margin">
<div class="container">
    <div class="section-intro pb-85px text-center">
    <h2 class="section-intro__title">About Us</h2>
    <hr>
    <p class="section-intro__subtitle">Vel aliquam quis, nulla pede mi commodo tristique nam hac. Luctus torquent velit felis commodo pellentesque nulla cras. Tincidunt hacvel alivquam quis nulla pede mi commodo tristique nam hac  luctus torquent</p>
    </div>

    <div class="section-intro text-center">
    <h2 class="section-intro__title">Our Pages</h2>
    <hr>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-lg-4">
        <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
            <span class="card-feature__icon">
            <i class="ti-arrow-top-right"></i>
            </span>
            <h3 class="card-feature__title">Unique Design</h3>
            <p class="card-feature__subtitle">Molestie lorem est faucibus faucibus erat phasellus placerat proin aptent</p>

            <a class="button button-light text-center" href="" style="margin-top: 20px;">Read more</a>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
            <span class="card-feature__icon">
            <i class="ti-mouse-alt"></i>
            </span>
            <h3 class="card-feature__title">Business Solution</h3>
            <p class="card-feature__subtitle">Molestie lorem est faucibus faucibus erat phasellus placerat proin aptent</p>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="card card-feature text-center text-lg-left mb-4 mb-lg-0">
            <span class="card-feature__icon">
            <i class="ti-headphone-alt"></i>
            </span>
            <h3 class="card-feature__title">Customer Support</h3>
            <p class="card-feature__subtitle">Molestie lorem est faucibus faucibus erat phasellus placerat proin aptent</p>
        </div>
        </div>
    </div>
    </div>
</div>
</section>
<!--================ Feature section end =================--> 

<!--================ Testimonial section start =================-->      
<section class="section-padding bg-magnolia">
<div class="container">
    <div class="section-intro text-center">
    <h2 class="section-intro__title">Our partners</h2>
    <hr>
    </div>

    <div class="owl-carousel owl-theme testimonial">
    <div class="testimonial__item text-center">
        <div class="testimonial__img">
        <img src="{{asset('/assets/img/testimonial/testimonial1.png')}}" alt="">
        </div>
        <div class="testimonial__content">
        <h3>Stephen Mcmilan</h3>
        <p>Executive, ACI Group</p>
        <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had also made from. Give may saying meat there from heaven</p>
        </div>
    </div>
    <div class="testimonial__item text-center">
        <div class="testimonial__img">
        <img src="img/testimonial/testimonial1.png" alt="">
        </div>
        <div class="testimonial__content">
        <h3>Stephen Mcmilan</h3>
        <p>Executive, ACI Group</p>
        <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had also made from. Give may saying meat there from heaven</p>
        </div>
    </div>
    <div class="testimonial__item text-center">
        <div class="testimonial__img">
        <img src="img/testimonial/testimonial1.png" alt="">
        </div>
        <div class="testimonial__content">
        <h3>Stephen Mcmilan</h3>
        <p>Executive, ACI Group</p>
        <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had also made from. Give may saying meat there from heaven</p>
        </div>
    </div>
    </div>
</div>
</section>
<!--================ Testimonial section end =================-->

<!-- ================ start footer Area ================= -->
<footer class="footer-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                <h4>Top Products</h4>
                <ul>
                    <li><a href="#">Managed Website</a></li>
                    <li><a href="#">Manage Reputation</a></li>
                    <li><a href="#">Power Tools</a></li>
                    <li><a href="#">Marketing Service</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Brand Assets</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                <h4>Features</h4>
                <ul>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Brand Assets</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Guides</a></li>
                    <li><a href="#">Research</a></li>
                    <li><a href="#">Experts</a></li>
                    <li><a href="#">Agencies</a></li>
                </ul>
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

@endsection
