<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - Pitech</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta property="og:title" content="Pitech" />
    <meta property="og:image" content="https://pitech.asia/img/pi-logo-simple.svg" />
    <meta property="og:type" content="website" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/vendor/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/assets/fonts/fonts.css')}}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/vendor/slick-theme.css')}}">
  <link rel="stylesheet" href="{{ asset('public/assets/css/main.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="{{ asset('public/admin/vendor/jquery/jquery.min.js')}}"></script>
</head>

<body>
  <!-- Header  -->

  <header class="header bg-white grey-shadow">
    <div class="nav-head">
      <div class="container ">
        <nav class="navbar px-0 navbar-expand-md ">
  
          <a class="navbar-brand" href="{{ route('home') }}">
            <h1 class="mb-0">
              <img src="{{ asset('public/assets/images/mobile/logo_head.png')}}" alt="logo">
            </h1>
          </a>
          <button class="navbar-toggler d-md-block d-lg-none ml-auto" type="button" data-toggle="collapse"
            data-target="#collapsibleNavMobile" aria-controls="collapsibleNavMobile" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
              <img src="{{ asset('public/assets/images/mobile/icons/icn-bar.png')}}" class="img-fluid" alt="menu">
            </span>
          </button>
          <!-- Latop nav  -->
          <div class="d-none d-md-none d-lg-block w-100 navbar-laptop">
            <div class="d-flex">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item dash-link @yield('index')">
                  <a class="nav-link px-0" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dash-link @yield('teachme')">
                  <a class="nav-link px-0" href="{{ route('teachMeIndex') }}">Teach me series</a>
                </li>
                <li class="nav-item dash-link @yield('building')">
                  <a class="nav-link px-0" href="{{ route('BuildingFuture') }}">Building the future</a>
                </li>
                <li class="nav-item dash-link @yield('iothub')">
                  <a class="nav-link px-0" href="{{ route('IotHub') }}">IOT Hub</a>
                </li>
                <li class="nav-item dropdown d-flex align-items-center dash-link @yield('explorer')">
                  <a class="nav-link d-flex align-items-center" href="#" id="exploreLaptop" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Explorer</a>
                  <div class="dropdown-menu" aria-labelledby="exploreLaptop">
                    <a class="dropdown-item" href="{{ route('RelatedProducts') }}">Related product</a>
                    <a class="dropdown-item" href="{{ route('Applications') }}">Application</a>
                    <a class="dropdown-item" href="{{ route('PressResources') }}">Press resources</a>
                    <a class="dropdown-item" href="{{ route('Careers') }}">Career</a>
                    {{-- <a class="dropdown-item" href="#">Manuals</a> --}}
                  </div>
                </li>
                @if(session('lang') == 'en')
                <li class="nav-item dash-link">
                  <a class="nav-link px-0"  style="color: #787878" href="{{ route('change2Vi') }}">VI</a>
                </li>
                @else
                <li class="nav-item dash-link">
                  <a class="nav-link px-0"   style="color: #787878" href="{{ route('change2En') }}">EN</a>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </nav>
  
      </div>

    </div>
    <!-- Mobible nav  -->
    <div class="container navbar py-0">
      <nav class="collapse navbar-collapse" id="collapsibleNavMobile">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 text-center">
          <li class="nav-item  @yield('index')">
            <a class="nav-link" href="{{ route('home') }}">Home</span></a>
          </li>
          <li class="nav-item  @yield('teachme')">
            <a class="nav-link" href="{{ route('teachMeIndex') }}">Teach me series</a>
          </li>
          <li class="nav-item @yield('building')">
            <a class="nav-link" href="{{ route('BuildingFuture') }}">Building the future</a>
          </li>
          <li class="nav-item @yield('iothub')">
            <a class="nav-link" href="{{ route('IotHub') }}">IOT Hub</a>
          </li>
          <li class="nav-item dropdown   @yield('explorer')">
            <a class="nav-link  d-flex align-items-center justify-content-center" href="#"
              id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Explorer
            </a>
            <div class="dropdown-menu border-0 text-center" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="{{ route('RelatedProducts') }}">Related product</a>
              <a class="dropdown-item" href="{{ route('Applications') }}">Application</a>
              <a class="dropdown-item" href="{{ route('PressResources') }}">Press resources</a>
              <a class="dropdown-item" href="{{ route('Careers') }}">Career</a>
            </div>
          </li>
           @if(session('lang') == 'en')
          <li class="nav-item">
            <a class="nav-link" href="{{ route('change2Vi') }}"  style="color: #787878">VI</a>
          </li>
          @else
           <li class="nav-item">
            <a class="nav-link" href="{{ route('change2En') }}"  style="color: #787878">EN</a>
          </li>
          @endif
        </ul>
      </nav>

    </div>
  </header>
  <!-- End header  -->
   <!--================= Main content ================= -->
       @yield('content')
       <!--================= Main content ================= -->
    <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-3 col-xl-3 px-0 align-self-center">
          <div class="logo ">
            <a href="#">
              <img src="{{asset('public/assets/images/mobile/logo-foot.png')}}" class="img-fluid d-block d-lg-none" alt="pitech">
              <img src="{{asset('public/assets/images/laptop/logo_foot.png')}}" class="img-fluid d-none d-lg-block" alt="pitech">
            </a>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-3 col-xl-3  px-0 menu d-none d-lg-block">
          <h4 class="text-uppercase d-none d-lg-block font-weight-bold text-white">Menu</h4>
          <ul class="px-0">
            <li>
              <a href="{{ route('home') }}" class="text-uppercase">
                Home
              </a>
            </li>
            <li>
              <a href="{{ route('teachMeIndex') }}" class="text-uppercase">
                Teach me series
              </a>
            </li>
            <li>
              <a href="{{ route('BuildingFuture') }}" class="text-uppercase">
                Building the future
              </a>
            </li>
            <li>
              <a href="{{ route('IotHub') }}" class="text-uppercase">
                IOT Hub
              </a>
            </li>
            <li>
              <a href="#" class="text-uppercase">
                Explorer
              </a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-md-12 col-lg-3 col-xl-3  pl-0 contact">
          <h4 class="text-uppercase d-none d-lg-block font-weight-bold text-white">{{session('lang') == 'en' ? 'Address' : 'Văn phòng công ty'}}</h4>
          <ul class="pl-0">
            <li>
              <div class="address d-flex align-items-center ">
                <img class="contact-icn" src="{{ asset('public/assets/images/mobile/icons/icn-map.png')}}" alt="address">
                <p class="text-white mb-0">
                  <span>
                    94 Nguyễn Du, Phường 7,
                  </span>
                  <br>
                  <span>
                    Quận Gò Vấp, TP.HCM
                  </span>
                </p>
              </div>
            </li>
            <li>
              <div class="email d-flex align-items-center mb-15px">
                <img class="contact-icn" src="{{ asset('public/assets/images/mobile/icons/icn-mail.png')}}" alt="email">
                <p class="text-white mb-0 d-md-none">
                  <span>
                    contact@pitech.asia
                  </span>
                </p>
                <p class="text-white mb-0 d-none d-lg-block">
                  <span>
                    contact@pistore.asia
                  </span>
                </p>
              </div>
            </li>
            <li class="d-lg-none">
              <div class="phone  d-flex align-items-center  ">
                <img class="contact-icn" src="{{ asset('public/assets/images/mobile/icons/icn-phone.png')}}" alt="email">
                <p class="text-white mb-0">
                  <span>
                    1900 633 430
                  </span>
                </p>
              </div>
            </li>
            <li class="d-none d-lg-block">
              <p class="text-white">MST <span>031416393</span></p>
            </li>
          </ul>
        </div>
        <div class="col-12 col-md-12 col-lg-3 col-xl-3 pr-0 " style="padding-left:5px">
          <!-- social network  -->
          <div class="social-network">
            <h4 class="text-uppercase d-none d-lg-block font-weight-bold text-white">{{session('lang') == 'en' ? 'Contact' : 'Liên hệ'}}</h4>
            <!-- List network on mobile  -->
            <ul class="px-0 d-block d-lg-none">
              <li class="d-inline-block "><a href="https://www.facebook.com/pitech/" target="_blank"  class="d-inline-block d-lg-none">
                  <img src="{{ asset('public/assets/images/mobile/icons/icn-fb.png')}}" alt="fb">
                </a></li>
              <li class="d-inline-block">
                <a href="https://www.youtube.com/channel/UC7fCBx5nsJQrbu5mU3G1E6Q" target="_blank"   class="d-lg-none">
                  <img src="{{ asset('public/assets/images/mobile/icons/icn-youtube.png')}}" alt="youtube">
                </a>
              </li>
            </ul>
            <!-- List net work on laptop  -->
            <ul class="px-0 d-none d-lg-block">
              <li class="d-inline-block"><a href="https://www.facebook.com/pitech/" target="_blank">
                <img src="{{ asset('public/assets/images/laptop/icn/icn-fb.png')}}" alt="facebook">
              </a></li>
              <li class="d-inline-block"><a href="https://www.youtube.com/channel/UC7fCBx5nsJQrbu5mU3G1E6Q" target="_blank">
                <img src="{{ asset('public/assets/images/laptop/icn/icn-youtube.png')}}" alt="youtube">
              </a></li>
              <li class="d-inline-block">
                <a href="mailto: contact@pitech.asia" target="_blank">
                  <img src="{{ asset('public/assets/images/laptop/icn/icn-gmail.png')}}" alt="gmail">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <div class="copyright">
    <div class="container">
      <p class="text-center">Copyright 2019 by Pitech.asia</p>
    </div>
  </div>
  <!-- End footer  -->
  
  <script src="{{ asset('public/assets/js/vendor/popper.min.js')}}"></script>
  <script src="{{ asset('public/assets/js/vendor/bootstrap.min.js')}}"></script>
  <script src="{{ asset('public/assets/js/custom.js')}}"></script>
  <script src="{{ asset('public/assets/js/moment.js')}}"></script>
   <script src="{{asset('public/assets/js/vendor/jquery.youtube-background.js')}}"></script>
    <script>
        $(function () {
            $('[data-youtube]').youtube_background({
                mobile: true,
            });

            $('.fbsharelink').click( function() 
{
    var shareurl = $(this).data('shareurl');
    window.open('https://www.facebook.com/sharer/sharer.php?u='+escape(shareurl)+'&t='+document.title, '', 
    'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
    return false;
});

        }); 

        function detectmob() { 
 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
    return true;
  }
 else {
    return false;
  }
}
    </script>
</body>

</html>