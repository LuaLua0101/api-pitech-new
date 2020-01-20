@extends('layouts.client')

@section('building', 'active')

@section('content')
 <!-- Bread cum  -->
    <section class="breadcum building-page-breadcum">
        <div class="container text-center">
            <h2 class="breadcum-title">Building The Future</h2> 
            <p>{{ $banner->content}}</p>
        </div>
    </section>
   @foreach($buildings as $key => $item)
   @if($key === 0)
     <div class="container" style="width: 70%">
            <hr class="breadcum-line w-100" > 
        </div>
        @else 
          <div class="container" >
            <hr class="breadcum-line w-100" > 
        </div>
        @endif
      <!-- Section Zoooer -->
      <section class="cqa info-section">
            <div class="container">
                <div class="{{$key % 2 ? 'row' : 'row reverse-laptop'}}">
                    <div class="col-12 col-md-12 col-lg-7 col-xl-7 info-block">
                        <h3 class="d-none d-lg-block">{{ $item->dep}}</h3>
                        <h3 class="d-block d-lg-none" style="color: #1261D6">{{ $item->dep}}</h3>
                        <h4>
                               <b>{{ $item->title}}</b>
                            </h4>
                        <p class="d-lg-block">
                              {{ $item->desc}}
                        </p>
                        {{-- <a href="#" class="learn-more d-none d-lg-block">
                            <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                            <span><img src="./assets/images/mobile/icons/icn-arrow-down-blue.png" alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                        </a> --}}
                    </div>
                    <div class="col-12 col-md-12 col-lg-5 col-xl-5 img-block text-center">
                        <img class="img-fluid w-100" src="{{asset('public/img/Building/' . $item->cover)}}" alt="cms">
                    </div>
                </div>
    
            </div>
        </section>
@endforeach
     <!-- End  -->
     {{-- <div class="container">
            <hr class="breadcum-line w-100"> 
        </div>
       <!-- Section Zooer -->
       <section class="zooer info-section">
            <div class="container">
                <div class="row reverse-laptop">
                    <div class="col-12 col-md-12 col-lg-6 col-xl-6 info-block">
                        <h3 class="d-none d-lg-block">Zooer app</h3>
                        <h3 class="d-block d-lg-none text-uppercase">Zooer app</h3>
                        <h4>
                                Ứng dụng dùng để theo dõi các hoạt động lắp đặt, bảo hành, sửa chữa của Zooer team – nhân viên kỹ thuật lắp đặt.
                                 Ngoài ra app còn được lập trình trò chơi để tạo hứng thú trong công việc.
                        </h4>
                        <br/>
                        <p class="d-none d-lg-block">
                               1
                        </p>
                        <a href="#" class="learn-more d-none d-lg-block">
                            <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                            <span><img src="./assets/images/mobile/icons/icn-arrow-down-blue.png" alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                        </a>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 col-xl-6 img-block text-center">
                        <img class="img-fluid w-100" src="./assets/images/laptop/building/zooer-transparent.png" alt="cms">
                    </div>
                </div>
    
            </div>
        </section> --}}
@endsection