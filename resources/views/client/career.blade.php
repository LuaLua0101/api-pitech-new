@extends('layouts.client') @section('index', 'active') @section('content')
<!-- Banner  -->
<div class="banner">

</div>

<!-- End banner  -->
<!-- Bread cum  -->
<section class="breadcum building-page-breadcum career-breadcum">
    <div class="container text-center">
        <h2 class="breadcum-title">Career</h2>
        <p>
            {{ $banner->content}}
        </p>
    </div>
</section>
<div class="container d-none d-lg-block">
    <hr class="breadcum-line">
</div>
<!-- // Bread cum  -->
<!-- Careers opened  -->
<section class="careers ">
    <!-- Laptop style  -->
    <div class="container d-none d-lg-block laptop-main-content">
        @foreach($careers as $key=>$item) @if($key % 2)

        <div class="row align-items-center block-item">
            <div class="col-12 col-lg-6 col-xl-6">
                <img src="{{asset('public/img/Career/' . $item->cover)}}" class="img-fluid" alt="career">
            </div>

            <div class="col-12 col-lg-6 col-xl-6 text-block-right">
                <h3 class="font-weight-bold text-uppercase mobile-sub-heading">{{$item->dep}}</h3>
                <h4>{{$item->title}}
                    </h4>
                <p class="d-none d-lg-block">
                    {{$item->desc}}
                </p>
            </div>
        </div>
        @else
        <div class="row align-items-center block-item ">
            <div class="col-12 col-lg-6 col-xl-6 text-block-left">
                <h3 class="font-weight-bold text-uppercase mobile-sub-heading">{{$item->dep}}</h3>
                <h4>{{$item->title}}</h4>
                <p class="d-none d-lg-block">
                    {{ $item->desc}}
            </div>
            <div class="col-12 col-lg-6 col-xl-6">
                <img src="{{asset('public/img/Career/' . $item->cover)}}" class="img-fluid" alt="career">
            </div>
        </div>
        @endif @endforeach
    </div>
    <!-- Mobile style - toggle -->
    <div class="container d-block d-lg-none">
 @foreach($careers as $item)
        <!-- Toggle btn  -->
        <button class="btn btn-primary toggle-mobile" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
            <span class="title">{{$item->dep}}</span>
            <span class="pull-right"><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-down-blue.png')}}" alt=""></span>
            <div class="clear-float"></div>
        </button>
        <!-- Collapse content  -->
        <div class="collapse toggle-content" id="collapseExample2">
            <div class="content text-center">
                <div class="career-img">
                    <img class="img-fluid" src="{{asset('public/img/Career/' . $item->cover)}}" alt="career">
                </div>
                <div class="job-desc">
                    <h4> {{ $item->title}}</h4>
                    <p>
                        {{ $item->desc}}
                    </p>
                    {{-- <a href="#" class="learn-more">
                        <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                        <span><img width="7" src="./assets/images/mobile/icons/icn-arrow-down-blue.png"
                                    alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                    </a> --}}
                </div>
            </div>
        </div>
@endforeach
    </div>
</section>
<section class="quote">
    <div class="container quote-content">
        <div class="quote-line mx-auto"></div>
        <div class="quote-contain text-center">
            {{session('lang') == 'en' ? 'quote tiếng Anh' : 'quote tiếng Việt'}}
            <br>
            <strong>sample@pitech.gmail.com</strong>
        </div>

    </div>
</section>
@endsection