@extends('layouts.client')
@section('title', 'Related Product')
@section('explorer', 'active')

@section('content')
<!-- Bread cum  -->
    <section class="breadcum related-products-breadcum">
        <div class="container text-center">
            <h2 class="breadcum-title">Related products</h2>
            <p>
                {{$banner->content}}
            </p>
        </div>
    </section>
    <!-- Carousel  MOBILE -->
    <section class="d-block d-lg-none features-mobile">
        <div class="container">
            <div class="slider-nav slider-nav-1">
                <div class="text-center slider-nav-item-mobile dashed-fox">
                    {{-- <img class="mx-auto" src="{{asset('public/assets/images/laptop/carousel/carousel-fox.png')}}" alt="fox"> --}}
                    <img class="mx-auto" src="{{asset('public/assets/images/animals/fox.png')}}" alt="fox">
                </div>
                <div class="text-center slider-nav-item-mobile dashed-rhino">
                    {{-- <img class="mx-auto" src="{{asset('public/assets/images/laptop/carousel/carousel-rhino.png')}}" alt="fox"> --}}
                    <img class="mx-auto" src="{{asset('public/assets/images/animals/rhino.png')}}" alt="fox">
                </div>
                <div class="text-center slider-nav-item-mobile dashed-bull">
                    {{-- <img class="mx-auto" src="{{asset('public/assets/images/laptop/carousel/carousel-ox.png')}}" alt="fox"> --}}
                    <img class="mx-auto" src="{{asset('public/assets/images/animals/bull.png')}}" alt="fox">
                </div>
                <div class="text-center slider-nav-item-mobile">
                    {{-- <img class="mx-auto" src="{{asset('public/assets/images/laptop/carousel/carousel-bird-2.png')}}" alt="fox"> --}}
                    <img class="mx-auto" src="{{asset('public/assets/images/animals/red_owl.png')}}" alt="fox">
                </div>
            </div>
            <div class="slider-for slider-for-1">
                <div class="item-caption text-center" >
                    <h3 class="font-weight-bold">{{$products[0]->name}}</h3>
                    <p>
                        {{$products[0]->desc}}
                    </p>
                    <a href="{{$products[0]->url}}" target="_blank"  class="learn-more d-flex align-items-center justify-content-center">
                        <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                        <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}" alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                    </a>
                </div>
                <div class="item-caption text-center">
                    <h3 class="font-weight-bold">{{$products[1]->name}}</h3>
                    <p>
                     {{$products[1]->desc}}
                    </p>
                    <a href="{{$products[1]->url}}" target="_blank"  class="learn-more d-flex align-items-center justify-content-center">
                        <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                        <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}" alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                    </a>
                </div>
                <div class="item-caption text-center">
                    <h3 class="font-weight-bold">{{$products[2]->name}}</h3>
                    <p>
                        {{$products[2]->desc}}
                    </p>
                      <span class="learn-more d-flex align-items-center justify-content-center">{{session('lang') == 'en' ? 'Coming soon' : 'Sắp ra mắt'}}</span>
                    {{-- <a href={{$products[2]->url}}  target="_blank" class="learn-more d-flex align-items-center justify-content-center">
                        <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                        <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}" alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                    </a> --}}
                </div>
                <div class="item-caption text-center">
                    <h3 class="font-weight-bold">{{$products[3]->name}}</h3>
                    <p>
                      {{$products[3]->desc}}
                    </p>
                     <span class="learn-more d-flex align-items-center justify-content-center">{{session('lang') == 'en' ? 'Coming soon' : 'Sắp ra mắt'}}</span>
                    {{-- <a href={{$products[3]->url}} target="_blank"  class="learn-more d-flex align-items-center justify-content-center">
                        <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                        <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}" alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                    </a> --}}
                </div>
            </div>
        </div>
    </section>

    <!-- End section  -->
    <div class="container">
        <hr class="breadcum-line w-100">
    </div>
    <!-- Carousel mobile 2  -->
    <section class="d-block d-lg-none features-mobile">
        <div class="container">
            <div class="slider-nav slider-nav-2">
                <div class="text-center slider-nav-item-mobile dashed-bear">
                    {{-- <img class="mx-auto" src="{{asset('public/assets/images/laptop/carousel/carousel-bear.png')}}" alt="fox"> --}}
                    <img class="mx-auto" src="{{asset('public/assets/images/animals/bear.png')}}" alt="fox">
                </div>
                <div class="text-center slider-nav-item-mobile dashed-deer">
                    {{-- <img class="mx-auto" src="{{asset('public/assets/images/laptop/carousel/deer-116px.png')}}" alt="fox"> --}}
                    <img class="mx-auto" src="{{asset('public/assets/images/animals/deer.png')}}" alt="fox">
                </div>
                <div class="text-center slider-nav-item-mobile wide-image">
                    {{-- <img class="mx-auto" src="{{asset('public/assets/images/laptop/carousel/carousel-peacock.png')}}" alt="fox"> --}}
                    <img src="{{asset('public/assets/images/animals/peacock.png')}}" alt="fox">
                </div>
                <div class="text-center slider-nav-item-mobile">
                    {{-- <img class="mx-auto" src="{{asset('public/assets/images/laptop/carousel/carousel-bird.png')}}" alt="fox"> --}}
                    <img class="mx-auto" src="{{asset('public/assets/images/animals/parrot.png')}}" alt="fox">
                </div>
            </div>
            <div class="slider-for slider-for-2">
                <div class="item-caption text-center">
                    <h3 class="font-weight-bold">{{$products[4]->name}}</h3>
                    <p>
                        {{$products[4]->desc}}
                    </p>
                     <span class="learn-more d-flex align-items-center justify-content-center">{{session('lang') == 'en' ? 'Coming soon' : 'Sắp ra mắt'}}</span>
                    {{-- <a href={{$products[0]->url}}  target="_blank" class="learn-more d-flex align-items-center justify-content-center">
                        <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                        <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}" alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                    </a> --}}
                </div>
                <div class="item-caption text-center">
                    <h3 class="font-weight-bold">{{$products[5]->name}}</h3>
                    <p>
                      {{$products[5]->desc}}
                    </p>
                      <span class="learn-more d-flex align-items-center justify-content-center">{{session('lang') == 'en' ? 'Coming soon' : 'Sắp ra mắt'}}</span>
                    {{-- <a href={{$products[0]->url}} target="_blank"  class="learn-more d-flex align-items-center justify-content-center">
                        <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                        <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}" alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                    </a> --}}
                </div>
                <div class="item-caption text-center">
                    <h3 class="font-weight-bold">{{$products[6]->name}}</h3>
                    <p>
                      {{$products[6]->desc}}
                    </p>
                      <span class="learn-more d-flex align-items-center justify-content-center">{{session('lang') == 'en' ? 'Coming soon' : 'Sắp ra mắt'}}</span>
                    {{-- <a href={{$products[0]->url}}  target="_blank" class="learn-more d-flex align-items-center justify-content-center">
                        <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                        <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}" alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                    </a> --}}
                </div>
                <div class="item-caption text-center">
                    <h3 class="font-weight-bold">{{$products[7]->name}}</h3>
                    <p>
                      {{$products[7]->desc}}
                    </p>
                      <span class="learn-more d-flex align-items-center justify-content-center">{{session('lang') == 'en' ? 'Coming soon' : 'Sắp ra mắt'}}</span>
                    {{-- <a href={{$products[0]->url}}  target="_blank" class="learn-more d-flex align-items-center justify-content-center">
                        <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                        <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}" alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                    </a> --}}
                </div>
            </div>

        </div>
    </section>

    <!-- Features laptop  -->
    <section class="d-none d-lg-block features">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 text-center block-feature">
                    <figure>
                        <img src="{{asset('public/assets/images/laptop/carousel/carousel-fox.png')}}" alt="">
                    </figure>
                    <div class="caption">
                        <h3 class="font-weight-bold">{{$products[0]->name}}</h3>
                        <p>
                           {{$products[0]->desc}}
                        </p>
                        <a href="{{$products[0]->url}}"  target="_blank" class="learn-more d-flex align-items-center justify-content-center">
                            <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                            <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}"
                                    alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                        </a>
                    </div>
                </div> 

                <div class="col-xl-3 text-center block-feature">
                    <figure>
                        {{-- <img src="{{asset('public/assets/images/laptop/carousel/carousel-rhino.png')}}" alt=""> --}}
                        <img src="{{asset('public/assets/images/animals/rhino.png')}}" alt="">
                    </figure>
                    <div class="caption">
                        <h3 class="font-weight-bold">{{$products[1]->name}}</h3>
                        <p>
                         {{$products[1]->desc}}
                        </p>
                        <a href="{{$products[1]->url}}" target="_blank"  class="learn-more d-flex align-items-center justify-content-center">
                            <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                            <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}"
                                    alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 text-center block-feature">
                    <figure>
                        {{-- <img src="{{asset('public/assets/images/laptop/carousel/carousel-ox.png')}}" alt=""> --}}
                        <img src="{{asset('public/assets/images/animals/bull.png')}}" alt="">
                    </figure>
                    <div class="caption">
                        <h3 class="font-weight-bold">{{$products[2]->name}}</h3>
                        <p>
                         {{$products[2]->desc}}
                        </p>
                        <span class="learn-more d-flex align-items-center justify-content-center">{{session('lang') == 'en' ? 'Coming soon' : 'Sắp ra mắt'}}</span>
                        {{-- <a href={{$products[2]->url}} target="_blank" class="learn-more d-flex align-items-center justify-content-center">
                            <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                            <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}"
                                    alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                        </a> --}}
                    </div>
                </div>
                <div class="col-xl-3 text-center block-feature">
                    <figure>
                        {{-- <img src="{{asset('public/assets/images/laptop/carousel/carousel-bird-2.png')}}" alt=""> --}}
                        <img src="{{asset('public/assets/images/animals/red_owl.png')}}" alt="">
                    </figure>
                    <div class="caption">
                        <h3 class="font-weight-bold">{{$products[3]->name}}</h3>
                        <p>
                            {{$products[3]->desc}}
                        </p>
                          <span class="learn-more d-flex align-items-center justify-content-center">{{session('lang') == 'en' ? 'Coming soon' : 'Sắp ra mắt'}}</span>
                            {{-- <a href={{$products[3]->url}} target="_blank" class="learn-more d-flex align-items-center justify-content-center">
                                <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                                <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}"
                                        alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                            </a> --}}
                    </div>
                </div>
                <div class="col-xl-3 text-center block-feature">
                    <figure>
                        {{-- <img src="{{asset('public/assets/images/laptop/carousel/carousel-bear.png')}}" alt=""> --}}
                        <img src="{{asset('public/assets/images/animals/bear.png')}}" alt="">
                    </figure>
                    <div class="caption">
                        <h3 class="font-weight-bold">{{$products[4]->name}}</h3>
                        <p>
                            {{$products[4]->desc}}
                        </p>
                          <span class="learn-more d-flex align-items-center justify-content-center">{{session('lang') == 'en' ? 'Coming soon' : 'Sắp ra mắt'}}</span>
                        {{-- <a href={{$products[4]->url}} target="_blank" class="learn-more d-flex align-items-center justify-content-center">
                            <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                            <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}"
                                    alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                        </a> --}}
                    </div>
                </div>
                <div class="col-xl-3 text-center block-feature">
                    <figure>
                        {{-- <img src="{{asset('public/assets/images/laptop/carousel/deer-116px.png')}}" alt=""> --}}
                        <img src="{{asset('public/assets/images/animals/deer.png')}}" alt="">
                    </figure>
                    <div class="caption">
                        <h3 class="font-weight-bold">{{$products[5]->name}}</h3>
                        <p>
                          {{$products[5]->desc}}
                        </p>
                          <span class="learn-more d-flex align-items-center justify-content-center">{{session('lang') == 'en' ? 'Coming soon' : 'Sắp ra mắt'}}</span>
                        {{-- <a href={{$products[5]->url}} target="_blank" class="learn-more d-flex align-items-center justify-content-center">
                            <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                            <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}"
                                    alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                        </a> --}}
                    </div>
                </div>
                <div class="col-xl-3 text-center block-feature">
                    <figure>
                        {{-- <img src="{{asset('public/assets/images/laptop/carousel/carousel-peacock.png')}}" alt=""> --}}
                        <img src="{{asset('public/assets/images/animals/peacock.png')}}" alt="">
                    </figure>
                    <div class="caption">
                        <h3 class="font-weight-bold">{{$products[6]->name}}</h3>
                        <p>
                          {{$products[6]->desc}}
                        </p>
                          <span class="learn-more d-flex align-items-center justify-content-center">{{session('lang') == 'en' ? 'Coming soon' : 'Sắp ra mắt'}}</span>
                        {{-- <a href={{$products[6]->url}} target="_blank" class="learn-more d-flex align-items-center justify-content-center">
                            <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                            <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}"
                                    alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                        </a> --}}
                    </div>
                </div>
                <div class="col-xl-3 text-center block-feature">
                        <figure>
                            {{-- <img src="{{asset('public/assets/images/laptop/carousel/carousel-bird.png')}}" alt=""> --}}
                            <img src="{{asset('public/assets/images/animals/parrot.png')}}" alt="">
                        </figure>
                        <div class="caption">
                            <h3 class="font-weight-bold">{{$products[7]->name}}</h3>
                            <p>
                               {{$products[7]->desc}}
                            </p>
                              <span class="learn-more d-flex align-items-center justify-content-center">{{session('lang') == 'en' ? 'Coming soon' : 'Sắp ra mắt'}}</span>
                            {{-- <a href= {{$products[7]->url}} target="_blank" class="learn-more d-flex align-items-center justify-content-center">
                                <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                                <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}"
                                        alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                            </a> --}}
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- Carousel  -->
     <link rel="stylesheet" href="{{ asset('public/assets/css/vendor/slick.css')}}">
    <script src="{{asset('public/assets/js/vendor/slick.min.js')}}"></script>
    <script>
        $(function () {
             $('.slider-for-1').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav-1').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.slider-for-1',
                dots: false,
                arrows: true,
                focusOnSelect: true,
                centerMode: true,
                centerPadding: '40px',
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '0',
                            slidesToShow: 3
                        }
                    }
                ]
            });
            
            $('.slider-for-2').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
            });
            $('.slider-nav-2').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.slider-for-2',
                dots: false,
                arrows: true,
                focusOnSelect: true,
                centerMode: true,
                centerPadding: '40px',
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '0',
                            slidesToShow: 3
                        }
                    }
                ]
            });
        }); 
    </script>
@endsection