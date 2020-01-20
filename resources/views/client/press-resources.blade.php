@extends('layouts.client') @section('index', 'active') @section('content')
<!-- Bread cum  -->
<section class="breadcum press-list-breadcum">
    <div class="container text-center">
        <h2 class="breadcum-title">Press resources</h2>
        {{-- <p class="d-block d-lg-none">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque illo assumenda fuga, fugiat animi atque laborum dicta error iste soluta!
        </p> --}}
    </div>
</section>
<!-- Press resources  -->
<section class="press-resources">
    <div class="container">
        <div class="row align-items-center brands">
            <div class="col-4 col-md-3 col-lg-3 col-xl-3">
                <img class="img-fluid w-100" src="{{asset('public/assets/images/Links/Logo-TechTimes-Vietnam.png')}}" alt="tinh te">
            </div>
            <div class="col-4 col-md-3 col-lg-3 col-xl-3">
                <img class="img-fluid w-100" src="{{asset('public/assets/images/Links/Logo_VTC.png')}}" alt="tinh te">
            </div>
            <div class="col-4 col-md-3 col-lg-3 col-xl-3">
                <img class="img-fluid w-100" src="{{asset('public/assets/images/Links/vnexpress.png')}}" alt="tinh te">
            </div>
            <div class="col-4 col-md-3 col-lg-3 col-xl-3">
                <img class="img-fluid w-100" src="{{asset('public/assets/images/Links/báo-giá-quảng-cáo-báo-tinhte.vn_.png')}}" alt="tinh te">
            </div>
            <div class="col ">
                <img class="img-fluid w-100" src="{{asset('public/assets/images/Links/logo-chan-trang-24h.png')}}" alt="tinh te">
            </div>
            <div class="col ">
                <img class="img-fluid w-100" src="{{asset('public/assets/images/Links/Zing-news.png')}}" alt="tinh te">
            </div>
            <div class="col ">
                <img class="img-fluid w-100" src="{{asset('public/assets/images/Links/LOGO-DAN-TRI.png')}}" alt="tinh te">
            </div>
            <div class="col ">
                <img class="img-fluid w-100" src="{{asset('public/assets/images/Links/GenK-1.png')}}" alt="tinh te">
            </div>
            <div class="col ">
                <img class="img-fluid w-100" src="{{asset('public/assets/images/Links/htv9-logo.png')}}" alt="tinh te">
            </div>
        </div>

    </div>
</section>
<div class="container">
    <hr class="breadcum-line w-100 press-resource-line">
</div>

<!-- List articles with pagination  -->
<section class="press-list">
    <div class="container">
        <!-- List articles  -->
        <div class="row"   id="press-show-more" name="press-show-more">
            <!-- 4 ITEMS/PAGE MOBILE (Last item won't have border bottom), 16/ LAPTOP  -->
          @foreach($press_resources as $item)
            <!-- Item article  -->
            <div class="col-12 col-md-12 col-lg-3 col-xl-3 " >
                <article class="article-box-2 article-box mb-15px ">
                    <a href={{ $item->url}} target="_blank" rel="noopener noreferrer">
                        <!-- Title visible on mobile  -->
                        <h3 class="d-block d-md-none">{{ $item->title}}</h3>
                        <!-- Details  -->
                        <div class="article-detail row mx-0 ">
                            <div class="feature-img col-5 col-md-12 col-lg-12 col-xl-12 pl-0">
                                <div class="img-box">
                                    <img src="{{asset('public/img/press-resource/' . $item->cover)}}" class="img-fluid w-100" alt="article">
                                    {{-- <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}" alt="play"> --}}
                                </div>
                            </div>
                            <div class="article-info col-7 col-md-12 col-lg-12 col-xl-12 px-0">
                                <!-- Title visible on laptop  -->
                                <h3 class="d-none d-md-block d-lg-block">{{ $item->title}}</h3>
                                <p class="mb-0">
                                    {{ $item->short_desc}}...
                                </p>
                                <div class="d-flex time-and-view align-items-center">
                                    <time>{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') }}</time>
                                    <div class="view d-flex align-items-center">
                                        <img height="16" src="{{asset('public/assets/images/mobile/icons/icn-eye-15.png')}}" alt="views" class="img-fluid">
                                        <span class="text-uppercase">{{ $item->view_count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </article>
            </div>
            <!-- // Item article  -->
            @endforeach
            
        </div>
        <!-- {{session('lang') == 'en' ? 'View more' : 'Xem thêm'}} BUTTON -->
        <div class="view-more-articles w-100">
            <!-- View more button -->
            <div href="#"
                class="text-uppercase mx-auto justify-content-center d-flex align-items-center view-more-btn">
                <span>
                    {{session('lang') == 'en' ? 'View more' : 'Xem thêm'}}
                </span>
                <span>
                    <img src="{{ asset('public/assets/images/laptop/icn/icn-arrow-down-blue.png')}}" alt="next">
                </span>
            </div>
        </div>

            {{-- <div class="w-100 view-more-articles">
                <div class="text-uppercase mx-auto justify-content-center d-flex align-items-center"
                 id="press-load-more" name="press-load-more" 
                style="cursor: pointer" onClick="pressLoadMore(skip)">
                    <div class="view-more-articles">
                        <span>{{session('lang') == 'en' ? 'View more' : 'Xem thêm'}}</span>
                        <span>
                            <img src="{{asset('public/assets/images/mobile/icons/icn-arrow-down-techseries.png')}}" alt="next">
                        </span>
                    </div>
                </div>
            </div> --}}
        <!-- End List articles  -->
    </div>
</section>
 <script>
     var skip = 8;
            function pressLoadMore(length) {
              $.ajax({
                type: 'get',
                url: "press-resource-loadmore/" + length,
                success: function (res) {
                    console.log(res)
                    skip += res.length
                  let htmlTeachMe = '';
                  res.forEach(item => htmlTeachMe += '<div class="col-12 col-md-12 col-lg-3 col-xl-3 ">'
                +'<article class="article-box-2 article-box mb-15px ">'
                    +'<a href='+item['url'] +' target="_blank" rel="noopener noreferrer">'
                        +'<h3 class="d-block d-md-none">'+item['title'] +'</h3>'
                        +'<div class="article-detail row mx-0 ">'
                            +'<div class="feature-img col-5 col-md-12 col-lg-12 col-xl-12 pl-0">'
                                +'<div class="img-box">'
                                    +'<img src="./public/img/press-resource/' + item['cover'] +'" class="img-fluid w-100" alt="article">'
                                +'</div>'
                            +'</div>'
                            +'<div class="article-info col-7 col-md-12 col-lg-12 col-xl-12 px-0">'
                                +'<h3 class="d-none d-md-block d-lg-block">'+item['title'] +'</h3>'
                                +'<p class="mb-0">' + item['short_desc'] + '...</p>'
                                +'<div class="d-flex time-and-view align-items-center">'
                                    +'<time>' + moment(item['created_at']).format("MMMM D, YYYY") + '</time>'
                                    +'<div class="view d-flex align-items-center">'
                                        +'<img height="16" src="./public/assets/images/mobile/icons/icn-eye-15.png" alt="views" class="img-fluid">'
                                        +'<span class="text-uppercase">{{ $item->view_count}}</span>'
                                    +'</div>'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                    +'</a>'
                +'</article>'
            +'</div>');
                  $('#press-show-more').html( $('#press-show-more').html() + htmlTeachMe)
                }
              });
            };
    </script>
@endsection