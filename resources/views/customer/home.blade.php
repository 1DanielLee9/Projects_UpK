<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--

    Template 2093 Flight

    http://www.tooplate.com/view/2093-flight

    -->
    <title>Chiketto | Take You Anywhere</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="{{ asset('base/chiketto.ico')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('customer/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('customer/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{ asset('customer/css/fontAwesome.css')}}">
    <link rel="stylesheet" href="{{ asset('customer/css/hero-slider.css')}}">
    <link rel="stylesheet" href="{{ asset('customer/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('customer/css/datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('customer/css/tooplate-style.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <script src="{{ asset('customer/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body>


<section class="banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="left-side">                    
                    <div class="logo">
                        <img style="width:75px;" src="{{ asset('Chiketto-logo.png')}}" alt="Flight Template">
                        <img style="width:200px;" src="{{ asset('Chiketto-logo-white.png')}}" alt="Flight Template">
                    </div>
                    <div class="tabs-content">
                        <h1 style="margin: 0px; font-family: cursive;color: antiquewhite;">Welcome</h1><br>
                        @if ($name != null)
                            <h2 style="color: aliceblue;"><strong style="font-family: 'Courier New', Courier, monospace;">{{$name}}</strong></h2>
                        @endif
                        <h4>Choose Your Transportation:</h4>
                        <ul class="social-links">
                            <li><a href="{{ route('customerFlight') }}">A <em>Flight</em> for the views<i class="fa fa-plane"></i></a></li>
                            <strong class="align-center" style="color:aliceblue">Or</strong>
                            <li><a href="{{ route('customerTrain') }}"><em>Train</em> for the ride?<i class="fa fa-train"></i></a></li>
                        </ul>
                    </div>
                    <div class="page-direction-button">
                        <a href="{{ route('customerContact') }}"><i class="fa fa-phone"></i>Contact Us Now</a>
                        @if ($id != null)
                            <a href="{{ route('customerLogout') }}" style="background-color: darkturquoise;"><i class="fa fa-sign-out"></i>Logout</a>    
                        @else
                            <a href="{{ route('customerLogin') }}" style="background-color: skyblue;"><i class="fa fa-sign-in"></i>Login</a>
                        @endif
                    </div>
                </div>
            </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>



<div class="tabs-content" id="weather">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Check Weather For 5 NEXT Days</h2>
                </div>
            </div>
            <div class="wrapper">
                <div class="col-md-12">
                    <div class="weather-content">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="tabs clearfix" data-tabgroup="second-tab-group">
                                    <li><a href="#monday" class="active">Monday</a></li>
                                    <li><a href="#tuesday">Tuesday</a></li>
                                    <li><a href="#wednesday">Wednesday</a></li>
                                    <li><a href="#thursday">Thursday</a></li>
                                    <li><a href="#friday">Friday</a></li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <section id="second-tab-group" class="weathergroup">
                                    <div id="monday">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>Myanmar</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-03.png')}}" alt="">
                                                    </div>
                                                    <span>32&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>26&deg;</span></li>
                                                        <li>12PM <span>32&deg;</span></li>
                                                        <li>6PM <span>28&deg;</span></li>
                                                        <li>12AM <span>22&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>Thailand</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-02.png')}}" alt="">
                                                    </div>
                                                    <span>28&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>20&deg;</span></li>
                                                        <li>12PM <span>28&deg;</span></li>
                                                        <li>6PM <span>26&deg;</span></li>
                                                        <li>12AM <span>18&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>India</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-01.png')}}" alt="">
                                                    </div>
                                                    <span>33&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>26&deg;</span></li>
                                                        <li>12PM <span>33&deg;</span></li>
                                                        <li>6PM <span>29&deg;</span></li>
                                                        <li>12AM <span>27&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tuesday">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>Myanmar</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-02.png')}}" alt="">
                                                    </div>
                                                    <span>28&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>18&deg;</span></li>
                                                        <li>12PM <span>27&deg;</span></li>
                                                        <li>6PM <span>25&deg;</span></li>
                                                        <li>12AM <span>17&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>Thailand</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-03.png')}}" alt="">
                                                    </div>
                                                    <span>31&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>19&deg;</span></li>
                                                        <li>12PM <span>28&deg;</span></li>
                                                        <li>6PM <span>22&deg;</span></li>
                                                        <li>12AM <span>18&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>India</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-01.png')}}" alt="">
                                                    </div>
                                                    <span>26&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>19&deg;</span></li>
                                                        <li>12PM <span>26&deg;</span></li>
                                                        <li>6PM <span>22&deg;</span></li>
                                                        <li>12AM <span>20&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="wednesday">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>Myanmar</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-03.png')}}" alt="">
                                                    </div>
                                                    <span>31&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>19&deg;</span></li>
                                                        <li>12PM <span>28&deg;</span></li>
                                                        <li>6PM <span>22&deg;</span></li>
                                                        <li>12AM <span>18&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>Thailand</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-01.png')}}" alt="">
                                                    </div>
                                                    <span>34&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>28&deg;</span></li>
                                                        <li>12PM <span>34&deg;</span></li>
                                                        <li>6PM <span>30&deg;</span></li>
                                                        <li>12AM <span>29&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>India</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-02.png')}}" alt="">
                                                    </div>
                                                    <span>28&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>18&deg;</span></li>
                                                        <li>12PM <span>27&deg;</span></li>
                                                        <li>6PM <span>25&deg;</span></li>
                                                        <li>12AM <span>17&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="thursday">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>Myanmar</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-01.png')}}" alt="">
                                                    </div>
                                                    <span>27&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>21&deg;</span></li>
                                                        <li>12PM <span>27&deg;</span></li>
                                                        <li>6PM <span>22&deg;</span></li>
                                                        <li>12AM <span>18&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>Thailand</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-02.png')}}" alt="">
                                                    </div>
                                                    <span>28&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>18&deg;</span></li>
                                                        <li>12PM <span>27&deg;</span></li>
                                                        <li>6PM <span>25&deg;</span></li>
                                                        <li>12AM <span>17&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>India</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-03.png')}}" alt="">
                                                    </div>
                                                    <span>31&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>19&deg;</span></li>
                                                        <li>12PM <span>28&deg;</span></li>
                                                        <li>6PM <span>22&deg;</span></li>
                                                        <li>12AM <span>18&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="friday">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>Myanmar</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-03.png')}}" alt="">
                                                    </div>
                                                    <span>33&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>28&deg;</span></li>
                                                        <li>12PM <span>33&deg;</span></li>
                                                        <li>6PM <span>29&deg;</span></li>
                                                        <li>12AM <span>27&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>Thailand</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-02.png')}}" alt="">
                                                    </div>
                                                    <span>31&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>24&deg;</span></li>
                                                        <li>12PM <span>31&deg;</span></li>
                                                        <li>6PM <span>26&deg;</span></li>
                                                        <li>12AM <span>23&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="weather-item">
                                                    <h6>India</h6>
                                                    <div class="weather-icon">
                                                        <img src="{{asset('customer/img/weather-icon-01.png')}}" alt="">
                                                    </div>
                                                    <span>28&deg;C</span>
                                                    <ul class="time-weather">
                                                        <li>6AM <span>24&deg;</span></li>
                                                        <li>12PM <span>28&deg;</span></li>
                                                        <li>6PM <span>26&deg;</span></li>
                                                        <li>12AM <span>22&deg;</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="tabs-content" id="recommended-hotel">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Recommended Hotel For You</h2>
                </div>
            </div>
            <div class="wrapper">
                <div class="col-md-4">
                    <ul class="tabs clearfix" data-tabgroup="third-tab-group">
                        <li><a href="#livingroom" class="active">Living Room <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#suitroom">Suit Room <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#swimingpool">Swiming Pool <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#massage">Massage Service <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#fitness">Fitness Life <i class="fa fa-angle-right"></i></a></li>
                        <li><a href="#event">Evening Event <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <section id="third-tab-group" class="recommendedgroup">
                    <div id="livingroom">
                        <div class="text-content">
                            <iframe width="100%" height="400px" src="https://www.youtube.com/embed/rMxTreSFMgE">
                            </iframe>
                        </div>
                    </div>
                    <div id="suitroom">
                        <div class="row">
                            <div class="col-md-12">
                                <div id="owl-suiteroom" class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="suiteroom-item">
                                            <img src="{{asset('customer/img/suite-02.jpg')}}" alt="">
                                            <div class="text-content">
                                                <h4>Clean And Relaxing Room</h4>
                                                <span>Aurora Resort</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="suiteroom-item">
                                            <img src="{{asset('customer/img/suite-01.jpg')}}" alt="">
                                            <div class="text-content">
                                                <h4>Special Suite Room TV</h4>
                                                <span>Khao Yai Hotel</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="suiteroom-item">
                                            <img src="{{asset('customer/img/suite-03.jpg')}}" alt="">
                                            <div class="text-content">
                                                <h4>The Best Sitting</h4>
                                                <span>Hotel Grand</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="swimingpool">
                        <img src="{{asset('customer/img/swiming-pool.jpg')}}" alt="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-content">
                                    <h4>Lovely View Swiming Pool For Special Guests</h4>
                                    <span>Victoria Resort and Spa</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="massage">
                        <img src="{{asset('customer/img/massage-service.jpg')}}" alt="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-content">
                                    <h4>Perfect Place For Relaxation</h4>
                                    <span>Napali Beach</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="fitness">
                        <img src="{{asset('customer/img/fitness-service.jpg')}}" alt="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-content">
                                    <h4>Insane Street Workout</h4>
                                    <span>Hua Hin Beach</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="event">
                        <img src="{{asset('customer/img/evening-event.jpg')}}" alt="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-content">
                                    <h4>Finest Winery Night</h4>
                                    <span>Queen Restaurant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>




<section id="most-visited">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Most Visited Places</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div id="owl-mostvisited" class="owl-carousel owl-theme">
                    <div class="item col-md-12">
                        <div class="visited-item">
                            <img src="{{asset('customer/img/place-01.jpg')}}" alt="">
                            <div class="text-content">
                                <h4>River Views</h4>
                                <span>New York</span>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-12">
                        <div class="visited-item">
                            <img src="{{asset('customer/img/place-02.jpg')}}" alt="">
                            <div class="text-content">
                                <h4>Lorem ipsum dolor</h4>
                                <span>Tokyo</span>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-12">
                        <div class="visited-item">
                            <img src="{{asset('customer/img/place-03.jpg')}}" alt="">
                            <div class="text-content">
                                <h4>Proin dignissim</h4>
                                <span>Paris</span>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-12">
                        <div class="visited-item">
                            <img src="{{asset('customer/img/place-04.jpg')}}" alt="">
                            <div class="text-content">
                                <h4>Fusce sed ipsum</h4>
                                <span>Hollywood</span>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-12">
                        <div class="visited-item">
                            <img src="{{asset('customer/img/place-02.jpg')}}" alt="">
                            <div class="text-content">
                                <h4>Vivamus egestas</h4>
                                <span>Tokyo</span>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-12">
                        <div class="visited-item">
                            <img src="{{asset('customer/img/place-01.jpg')}}" alt="">
                            <div class="text-content">
                                <h4>Aliquam elit metus</h4>
                                <span>New York</span>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-12">
                        <div class="visited-item">
                            <img src="{{asset('customer/img/place-03.jpg')}}" alt="">
                            <div class="text-content">
                                <h4>Phasellus pharetra</h4>
                                <span>Paris</span>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-12">
                        <div class="visited-item">
                            <img src="{{asset('customer/img/place-04.jpg')}}" alt="">
                            <div class="text-content">
                                <h4>In in quam efficitur</h4>
                                <span>Hollywood</span>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-12">
                        <div class="visited-item">
                            <img src="{{asset('customer/img/place-01.jpg')}}" alt="">
                            <div class="text-content">
                                <h4>Sed faucibus odio</h4>
                                <span>NEW YORK</span>
                            </div>
                        </div>
                    </div>
                    <div class="item col-md-12">
                        <div class="visited-item">
                            <img src="{{asset('customer/img/place-02.jpg')}}" alt="">
                            <div class="text-content">
                                <h4>Donec varius porttitor</h4>
                                <span>Tokyo</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="primary-button">
                    <a href="#" class="scroll-top fa fa-chevron-up"></a>
                </div>
            </div>
            <div class="col-md-12">
                <ul class="social-icons">
                    <li><a href="https://www.facebook.com/tooplate"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>
            <div class="col-md-12">
                <p>Copyright &copy; 2018 Flight Tour and Travel Company

                    | Design: <a href="http://www.tooplate.com/view/2093-flight" target="_parent"><em>Flight</em></a></p>
            </div>
        </div>
    </div>
</footer>





<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('customer/js/vendor/jquery-1.11.2.min.js')}}"><\/script>')</script>

<script src="{{ asset('customer/js/vendor/bootstrap.min.js')}}"></script>

<script src="{{ asset('customer/js/datepicker.js')}}"></script>
<script src="{{ asset('customer/js/plugins.js')}}"></script>
<script src="{{ asset('customer/js/main.js')}}"></script>

{{-- <script src="{{asset('base/plugins/bootstrap/js/bootstrap.js')}}"></script>

<script src="{{asset('base/js/admin.js')}}"></script> --}}

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {



        // navigation click actions
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
</script>
</body>
</html>