@extends('layouts.client')
@section('title', 'Application')
@section('explorer', 'active')

@section('content')
 <!-- Application  -->
    <section class="application application-intro">
        <div class="container">

            <div class="application-content">
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                        <img class="img-fluid" src="{{asset('public/assets/images/laptop/feature-img/img-app.png')}}" alt="">

                    </div>
                    <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                        <div class="card">
                            <div class="card-body pb-0">
                                <h4 class="card-title">{{$banner_new->title}}</h4>
                                <p class="card-text">{{$banner_new->content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End application  -->
    <div class="container d-none d-lg-block">
        <hr class="breadcum-line w-100">
    </div>
    <!-- Latest update  -->
    <section class="application-latest-updates">
        <div class="container">
            <h2 class="font-weight-bold text-center center-sp-heading mobile-sub-heading">
            {{session('lang') == 'en' ? 'Latest update' : 'Cập nhật mới nhất'}}
            </h2>
            <p class="d-lg-block text-center sub-title">{{$banner_app->title}}</p>
            <!-- 1 ITEM / ROW  -->
            <div class="row update-block">
                <div class="col-12 col-xl-9">
                    <div class="d-none d-lg-block">
                        <h3 class="font-weight-bold">{{$application->feature1_title}}</h3>
                        <p>
                            {{$application->feature1_desc}}
                        </p>
                        {{-- <a href="#" class="learn-more">
                            <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                            <span><img src="./assets/images/mobile/icons/icn-arrow-down-blue.png"
                                    alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                        </a> --}}
                    </div>
                    <!-- Note. Paragraph intro laptop was longer  so this will be display in mobile -->
                    {{-- <p class="d-block d-lg-none">{{$application->feature1_desc}}</p> --}}
                </div>
                <div class="col-12 col-xl-3">
                    <img class="icn-summarize" src="{{asset('public/img/applications/' . $application->feature1_cover)}}" alt="refresh">
                    <div class="d-lg-none sub-text">
                        <h3>{{$application->feature1_title}}</h3>
                        <p>
                          {{$application->feature1_desc}}
                        </p>
                        {{-- <a href="#" class="learn-more">
                            <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                            <span><img src="./assets/images/mobile/icons/icn-arrow-down-blue.png"
                                    alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                        </a> --}}
                    </div>
                </div>
            </div>
            <!-- 1 ITEM / ROW  -->
            <div class="row update-block">
                <div class="col-12 col-xl-9">
                    <div class="d-none d-lg-block">
                        <h3 class="font-weight-bold">{{$application->feature2_title}}</h3>
                        <p>
                            {{$application->feature2_desc}}
                        </p>
                        {{-- <a href="#" class="learn-more">
                            <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                            <span><img src="./assets/images/mobile/icons/icn-arrow-down-blue.png"
                                    alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                        </a> --}}
                    </div>
                    <!-- Note. Paragraph intro laptop was longer  so this will be display in mobile -->
                    {{-- <p class="d-block d-lg-none">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy nibh euis</p> --}}
                </div>
                <div class="col-12 col-xl-3">
                    <img class="icn-summarize" src="{{asset('public/img/applications/' . $application->feature2_cover)}}" alt="refresh">
                    <div class="d-lg-none sub-text">
                        <h3>{{$application->feature2_title}}</h3>
                        <p>
                         {{$application->feature2_desc}}
                        </p>
                        {{-- <a href="#" class="learn-more">
                            <span>{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</span>
                            <span><img src="./assets/images/mobile/icons/icn-arrow-down-blue.png"
                                    alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span>
                        </a> --}}
                    </div>
                </div>
            </div>
            <!-- 1 ITEM / ROW  -->
            <div class="row update-block">
                <div class="col-12 col-xl-9">
                    <div class="d-none d-lg-block">
                        <h3 class="font-weight-bold">{{$application->feature3_title}}</h3>
                        <p>
                            {{$application->feature3_desc}}
                        </p>
                        
                    </div>
                    <!-- Note. Paragraph intro laptop was longer  so this will be display in mobile -->
                    {{-- <p class="d-block d-lg-none">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy nibh euis</p> --}}
                </div>
                <div class="col-12 col-xl-3">
                    <img class="icn-summarize" src="{{asset('public/img/applications/' . $application->feature3_cover)}}" alt="refresh">
                    <div class="d-lg-none sub-text">
                        <h3>{{$application->feature3_title}}</h3>
                        <p>
                    {{$application->feature3_desc}}
                        </p>
                        <div class="text-uppercase mx-auto justify-content-center d-flex align-items-center view-more-articles"  style="cursor:pointer;width:45%;border: 1px solid #1261D6;border-radius: 15px;padding: 7px 15px 5px;"  onclick="showDetailPane()">
                            <b><span>{{session('lang') == 'en' ? 'View more' : 'Xem thêm'}} <i class="fa fa-angle-down" style="color: #1261D6"></i></span></b>
                            
                            <!-- <span style="margin-left:5px">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-arrow-down-blue.png')}}"
                                    alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span> -->
                        </div>

                        
                    </div>
                </div>
            </div>

            <!-- 1 ITEM / ROW  -->
            <div class="row update-block" id="detail-pane" name="detail-pane" style="display: none">
                <div class="col-12 col-xl-9">
                    <div class="d-none d-lg-block">
                        <p>
                            {!!$application->detail !!}
                        </p>
                    </div>
                </div>
                <div class="col-12 col-xl-3">
                    <div class="d-lg-none sub-text">
                        <p style="font-size: 13.16px;color: #515151">
                    {!!$application->detail !!}
                        </p>
                    </div>
                </div>
            </div>
            {{----------- VIEW MORE ----- --}}
            <div class="learn-more d-none d-lg-block" style="cursor:pointer; text-align:center; color: #1261D6; margin-bottom: 45px;" onclick="showDetailPane()">
                <b><span>{{session('lang') == 'en' ? 'View more' : 'Xem thêm'}} <i class="fa fa-angle-down" style="color: #1261D6"></i></span></b>
                <!-- <span><img src="{{asset('public/assets/images/mobile/icons/icn-arrow-down-blue.png')}}"
                        alt="{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}"></span> -->
            </div>
        </div>
    </section>
    <!-- End latest update  -->
    <div class="container d-none d-lg-block">
            <hr class="breadcum-line w-100">
        </div>
    <!-- Recent updates  -->
    <section class="recent-updates">
        <div class="container">
            <h2 class="font-weight-bold text-center center-sp-heading mobile-sub-heading">{{session('lang') == 'en' ? 'Recent Update' : 'Cập nhật gần đây'}}
            </h2>
            <p class="text-center sub-title">{{$banner_app->title}}</p>
            <!-- Box version  -->
            <div class="d-flex version-container justify-content-between align-items-center ">
                @if(!empty($related[1]))
                <div class="box-version active d-flex align-items-center justify-content-center" onclick="activeCaption(1)"
                id="box1" name="box1" style="cursor:pointer">
                    {{$related[1]->version}}
                </div>
                @endif
                 @if(!empty($related[2]))
                <div class="box-version d-flex align-items-center justify-content-center " onclick="activeCaption(2)"
                id="box2" name="box2"  style="cursor:pointer">
                   {{$related[2]->version}}
                </div>
                 @endif
                 @if(!empty($related[3]))
                <div class="box-version d-flex align-items-center justify-content-center " onclick="activeCaption(3)"
                id="box3" name="box3"  style="cursor:pointer">
                     {{$related[3]->version}}
                </div>
                 @endif
            </div>
            <!-- Caption  -->
            @if(!empty($related[1]))
            <div class="caption text-left" id="caption1" name="caption1">
                <h5>{{$related[1]->title}}</h5>
                <p>{{$related[1]->desc}}</p>
            </div>
                 @endif
            @if(!empty($related[2]))
             <div class="caption text-left" id="caption2" name="caption2" style="display:none">
                <h5>{{$related[2]->title}}</h5>
                <p>{{$related[2]->desc}}</p>
            </div>
                 @endif
            @if(!empty($related[3]))
             <div class="caption text-left" id="caption3" name="caption3" style="display:none">
                <h5>{{$related[3]->title}}</h5>
                <p>{{$related[3]->desc}}</p>
            </div>
                 @endif
        </div>
    </section>
    <script>
    var current = 1;
    function activeCaption(index) {
if(index == 1) {
    $("#caption1").show();
    $("#caption2").hide();
    $("#caption3").hide();

    $("#box1").addClass('active');
    $("#box2").removeClass('active');
    $("#box3").removeClass('active');
} else if(index == 2) {
     $("#caption1").hide();
    $("#caption2").show();
    $("#caption3").hide();

    $("#box2").addClass('active');
    $("#box1").removeClass('active');
    $("#box3").removeClass('active');
} else {
     $("#caption1").hide();
    $("#caption2").hide();
    $("#caption3").show();

    $("#box3").addClass('active');
    $("#box2").removeClass('active');
    $("#box1").removeClass('active');
}
    }

    function showDetailPane() {
         if($("#detail-pane").is(":visible")){
                 $("#detail-pane").hide();
                } else{
                     $("#detail-pane").show();
                }
       
    }
    </script>
@endsection