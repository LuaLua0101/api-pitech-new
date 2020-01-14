@extends('layouts.client') 
@section('index', 'active')
@section('teachmeLength', count($teachme))
@section('content')
<!-- Intro  -->
<section class="intro gradient-bg text-white">
    <div class="container text-center">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                <h2 class="text-uppercase font-weight-bold">{{$banner_home->title}}</h2>
                <p>
                    {{$banner_home->content}}
                </p>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 px-0">
                <img class="img-fluid d-none d-sm-block  " src="{{asset('public/assets/images/laptop/feature-img/intro-img-2.png')}}" alt="image">
                <img class="img-fluid d-block d-sm-none w-100" src="{{asset('public/assets/images/mobile/feature-img/home-intro-bg.png')}}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End intro  -->
<!-- Application  -->
<section class="application">
    <div class="container">
        <h2 class="font-weight-bold text-uppercase mobile-sub-heading">Application</h2>
        <div class="application-content">
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                    <img class="img-fluid" src="{{asset('public/assets/images/laptop/feature-img/img-app.png')}}" alt="">

                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$banner_app->title}}</h4>
                            <p class="card-text">{{$banner_app->content}}</p>
                            <a href="{{ route('Applications') }}" class="text-capitalize d-none d-sm-block learn-more">
                  {{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}
                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End application  -->
<!-- Teach me series  -->
<section class="teach-me bg-pale-grey">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h2 class="font-weight-bold text-uppercase mobile-sub-heading">Teach me series</h2>
            </div>
            <div class="col-6 d-none d-lg-block text-right">
                <a href="{{ route('teachMeIndex') }}" class="text-center view-more-articles">
                    <span>
                  {{session('lang') == 'en' ? 'View all post' : 'Xem tất cả'}}
                </span>
                    <span>
                  <img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}" alt="next">
                </span>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- Item feature laptop - won't display on mobile  -->
            <div class="col-12 col-lg-12 col-xl-12 d-none d-md-block feature-article-laptop">
                <article class="article-box">
                    <div class="row mx-0 article-detail align-items-center ">
                        <div class="col-md-6 col-xl-6 left-block pl-0">
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <div class="img-box">
                                    <img src="{{asset('public/img/post/' . $teachmepinned->cover)}}" alt="feature article">
                                    @if($teachmepinned->video_url)
                                    <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}" alt="play">
                                    @endif
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-6 right-block">
                            <!-- Views, title, link -->
                            <div class="article-brief-info d-flex align-items-center">
                                <time>{{ \Carbon\Carbon::parse($teachmepinned->created_at)->format('F j, Y') }}</time>
                                <div class="view d-flex align-items-center">
                                    <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                                    <span class="text-uppercase">{{ $teachmepinned->view_count}}</span>
                                </div>
                            </div>
                            <h3 class="text-black">{{ $teachmepinned->title}}</h3>
                            <p>
                                {{ $teachmepinned->short_desc}}
                            </p>
                            <a href="{{route('teachMeDetail', ['id' => $teachmepinned->pinned_id])}}" class="text-capitalize d-none d-sm-block learn-more" target="_blank" rel="noopener noreferrer">{{session('lang') == 'en' ? 'Learn more' : 'Xem chi tiết'}}</a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- End item feature laptop  -->
            <!--============= ITEMS ARTICLES - 2 FOR MOBILE, 6 FOR LAPTOP * NOTE (Item display on left and right
          side is slightly different) -=============-->
            <!-- Item mobile -->
            @if(!empty($teachme[0]))
            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <article class="article-box">
                    <!-- Views, date, comments-->
                    <div class="article-brief-info d-flex align-items-center d-block d-md-none">
                        <time>{{ \Carbon\Carbon::parse($teachme[0]->created_at)->format('F j, Y') }}</time>
                        <div class="view d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                            <span class="text-uppercase">{{$teachme[0]->view_count}}</span>
                        </div>
                        <div class="comments d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                            <span>{{$teachme[0]->chat_count}}</span>
                        </div>
                        <div class="share d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                            <span>{{$teachme[0]->share_count}}</span>
                        </div>
                    </div>
                    <!-- Feature img, title, description -->
                    <div class="article-detail secondary-article secondary-article--left">
                        <div class="row">
                            <div class="col-12 col-xl-7 left-block">
                                <div class="img-box">
                                    <img class="img-fluid thumbnail" src="{{asset('public/img/post/' . $teachme[0]->cover)}}" alt="article">
                                    @if($teachme[0]->video_url)
                                    <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}" alt="play">
@endif
                                </div>
                            </div>
                            <div class="col-12 col-xl-5 right-block">
                                <a href="{{route('teachMeDetail', ['id' => $teachme[0]->id])}}" target="_blank" rel="noopener noreferrer">
                                    <h3 class="text-black">{{$teachme[0]->title}}</h3>
                                    <p>
                                        {{$teachme[0]->short_desc}}
                                    </p>
                                </a>
                                <!-- Views, date visible on laptop-->
                                <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                                    <time>{{ \Carbon\Carbon::parse($teachme[0]->created_at)->format('F j, Y') }}</time>
                                    <div class="view d-flex align-items-center">
                                        <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                                        <span class="text-uppercase">{{$teachme[0]->view_count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            @endif
            <!-- End item  -->
            <!-- Item mobile -->
            @if(!empty($teachme[1]))
            <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                <article class="article-box">
                    <!-- Views, date, comments-->
                    <div class="article-brief-info d-flex align-items-center d-block d-md-none">
                        <time>{{ \Carbon\Carbon::parse($teachme[1]->created_at)->format('F j, Y') }}</time>
                        <div class="view d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                            <span class="text-uppercase">{{$teachme[1]->view_count}}</span>
                        </div>
                        <div class="comments d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                            <span>{{$teachme[1]->chat_count}}</span>
                        </div>
                        <div class="share d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                            <span>{{$teachme[1]->share_count}}</span>
                        </div>
                    </div>
                    <!-- Feature img, title, description -->
                    <div class="article-detail secondary-article secondary-article--right">
                        <div class="row">
                            <div class="col-12 col-xl-7 left-block">
                                <div class="img-box">
                                    <img class="img-fluid thumbnail" src="{{asset('public/img/post/' . $teachme[1]->cover)}}" alt="article">
                                      @if($teachme[1]->video_url)
                                    <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}" alt="play">@endif
                                </div>
                            </div>
                            <div class="col-12 col-xl-5 right-block">
                                <a href="{{route('teachMeDetail', ['id' => $teachme[1]->id])}}" target="_blank" rel="noopener noreferrer">
                                   <h3 class="text-black">{{$teachme[1]->title}}</h3>
                                    <p>
                                        {{$teachme[1]->short_desc}}
                                    </p>
                                </a>
                                <!-- Views, date visible on laptop-->
                                <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                                    <time>{{ \Carbon\Carbon::parse($teachme[1]->created_at)->format('F j, Y') }}</time>
                                    <div class="view d-flex align-items-center">
                                        <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                                        <span class="text-uppercase">{{$teachme[1]->view_count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            @endif
            <!-- End item  -->

            <!--================= HIDE REST ITEMS ON MOBILE================= -->
            <!-- Item mobile -->
            @if(!empty($teachme[2]))
            <div class="col-12 col-md-6 col-lg-6 col-xl-6 d-none d-lg-block">
                <article class="article-box">
                    <!-- Views, date, comments-->
                    <div class="article-brief-info d-flex align-items-center d-block d-md-none">
                        <time>{{ \Carbon\Carbon::parse($teachme[2]->created_at)->format('F j, Y') }}</time>
                        <div class="view d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                            <span class="text-uppercase">{{$teachme[2]->view_count}}</span>
                        </div>
                        <div class="comments d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                            <span>{{$teachme[2]->chat_count}}</span>
                        </div>
                        <div class="share d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                            <span>{{$teachme[2]->share_count}}</span>
                        </div>
                    </div>
                    <!-- Feature img, title, description -->
                    <div class="article-detail secondary-article secondary-article--left">
                        <div class="row">
                            <div class="col-12 col-xl-7 left-block">
                                <div class="img-box">
                                    <img class="img-fluid thumbnail" src="{{asset('public/img/post/' . $teachme[2]->cover)}}" alt="article">
                                      @if($teachme[2]->video_url)
                                    <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}" alt="play">@endif
                                </div>
                            </div>
                            <div class="col-12 col-xl-5 right-block">
                                <a href="{{route('teachMeDetail', ['id' => $teachme[2]->id])}}" target="_blank" rel="noopener noreferrer">
                                    <h3 class="text-black">{{$teachme[2]->title}}</h3>
                                    <p>
                                        {{$teachme[2]->short_desc}}
                                    </p>
                                </a>
                                <!-- Views, date visible on laptop-->
                                <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                                    <time>{{ \Carbon\Carbon::parse($teachme[2]->created_at)->format('F j, Y') }}</time>
                                    <div class="view d-flex align-items-center">
                                        <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                                        <span class="text-uppercase">{{$teachme[2]->view_count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            @endif
            <!-- End item  -->
            <!-- Item mobile -->
            @if(!empty($teachme[3]))
            <div class="col-12 col-md-6 col-lg-6 col-xl-6 d-none d-lg-block">
                <article class="article-box">
                    <!-- Views, date, comments-->
                    <div class="article-brief-info d-flex align-items-center d-block d-md-none">
                        <time>{{ \Carbon\Carbon::parse($teachme[3]->created_at)->format('F j, Y') }}</time>
                        <div class="view d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                            <span class="text-uppercase">{{$teachme[3]->view_count}}</span>
                        </div>
                        <div class="comments d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                            <span>{{$teachme[3]->chat_count}}</span>
                        </div>
                        <div class="share d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                            <span>{{$teachme[3]->share_count}}</span>
                        </div>
                    </div>
                    <!-- Feature img, title, description -->
                    <div class="article-detail secondary-article secondary-article--right">
                        <div class="row">
                            <div class="col-12 col-xl-7 left-block">
                                <div class="img-box">
                                    <img class="img-fluid thumbnail" src="{{asset('public/img/post/' . $teachme[3]->cover)}}" alt="article">
                                      @if($teachme[3]->video_url)
                                    <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}" alt="play">@endif
                                </div>
                            </div>
                            <div class="col-12 col-xl-5 right-block">
                                <a href="{{route('teachMeDetail', ['id' => $teachme[3]->id])}}" target="_blank" rel="noopener noreferrer">
                                   <h3 class="text-black">{{$teachme[3]->title}}</h3>
                                    <p>
                                        {{$teachme[3]->short_desc}}
                                    </p>
                                </a>
                                <!-- Views, date visible on laptop-->
                                <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                                    <time>{{ \Carbon\Carbon::parse($teachme[3]->created_at)->format('F j, Y') }}</time>
                                    <div class="view d-flex align-items-center">
                                        <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                                        <span class="text-uppercase">{{$teachme[3]->view_count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            @endif
            <!-- End item  -->
            <!-- Item mobile -->
            @if(!empty($teachme[4]))
            <div class="col-12 col-md-6 col-lg-6 col-xl-6 d-none d-lg-block">
                <article class="article-box">
                    <!-- Views, date, comments-->
                    <div class="article-brief-info d-flex align-items-center d-block d-md-none">
                        <time>{{ \Carbon\Carbon::parse($teachme[4]->created_at)->format('F j, Y') }}</time>
                        <div class="view d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                            <span class="text-uppercase">{{$teachme[4]->view_count}}k</span>
                        </div>
                        <div class="comments d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                            <span>{{$teachme[4]->chat_count}}</span>
                        </div>
                        <div class="share d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                            <span>{{$teachme[4]->share_count}}</span>
                        </div>
                    </div>
                    <!-- Feature img, title, description -->
                    <div class="article-detail secondary-article secondary-article--left">
                        <div class="row">
                            <div class="col-12 col-xl-7 left-block">
                                <div class="img-box">
                                    <img class="img-fluid thumbnail" src="{{asset('public/img/post/' . $teachme[4]->cover)}}" alt="article">
                                      @if($teachme[0]->video_url)
                                    <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}" alt="play">@endif
                                </div>
                            </div>
                            <div class="col-12 col-xl-5 right-block">
                                <a href="{{route('teachMeDetail', ['id' => $teachme[4]->id])}}" target="_blank" rel="noopener noreferrer">
                                    <h3 class="text-black">{{$teachme[4]->title}}</h3>
                                    <p>
                                        {{$teachme[4]->short_desc}}
                                    </p>
                                </a>
                                <!-- Views, date visible on laptop-->
                                <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                                    <time>{{ \Carbon\Carbon::parse($teachme[4]->created_at)->format('F j, Y') }}</time>
                                    <div class="view d-flex align-items-center">
                                        <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                                        <span class="text-uppercase">{{$teachme[4]->view_count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            @endif
            <!-- End item  -->
            <!-- Item mobile -->
            @if(!empty($teachme[5]))
            <div class="col-12 col-md-6 col-lg-6 col-xl-6 d-none d-lg-block">
                <article class="article-box">
                    <!-- Views, date, comments-->
                    <div class="article-brief-info d-flex align-items-center d-block d-md-none">
                        <time>{{ \Carbon\Carbon::parse($teachme[5]->created_at)->format('F j, Y') }}</time>
                        <div class="view d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                            <span class="text-uppercase">{{$teachme[5]->view_count}}</span>
                        </div>
                        <div class="comments d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                            <span>{{$teachme[5]->chat_count}}</span>
                        </div>
                        <div class="share d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                            <span>{{$teachme[5]->share_count}}</span>
                        </div>
                    </div>
                    <!-- Feature img, title, description -->
                    <div class="article-detail secondary-article secondary-article--right">
                        <div class="row">
                            <div class="col-12 col-xl-7 left-block">
                                <div class="img-box">
                                    <img class="img-fluid thumbnail" src="{{asset('public/img/post/' . $teachme[5]->cover)}}" alt="article">
                                      @if($teachme[5]->video_url)
                                    <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}" alt="play">
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-xl-5 right-block">
                                <a href="{{route('teachMeDetail', ['id' => $teachme[5]->id])}}" target="_blank" rel="noopener noreferrer">
                                    <h3 class="text-black">{{$teachme[5]->title}}</h3>
                                    <p>
                                        {{$teachme[5]->short_desc}}
                                    </p>
                                </a>
                                <!-- Views, date visible on laptop-->
                                <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                                    <time>{{ \Carbon\Carbon::parse($teachme[5]->created_at)->format('F j, Y') }}</time>
                                    <div class="view d-flex align-items-center">
                                        <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                                        <span class="text-uppercase">{{$teachme[5]->view_count}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            @endif
            <!-- End item  -->

            <!-- {{session('lang') == 'en' ? 'View more' : 'Xem thêm'}} - VISIBLE ON MOBILE ALSO -->
            <a href="{{ route('teachMeIndex') }}" class="text-uppercase text-center d-block d-lg-none view-more-articles">
                <span>
            {{session('lang') == 'en' ? 'View all post' : 'Xem tất cả'}}
          </span>
                <span>
            <img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}" alt="next">
          </span>
            </a>
        </div>
    </div>
</section>

<!-- // Teach me series  -->
<!-- IOT HUB  -->
<section class="iot-hub">
    <div class="container ">
        <div class="row">
            <div class="col-6">
                <h2 class="font-weight-bold text-uppercase mobile-sub-heading">IOT HUB</h2>
            </div>
            <div class="col-6 d-none d-lg-block text-right">
                <a href="{{ route('IotHub') }}" class="text-center view-more-articles">
                    <span>
              {{session('lang') == 'en' ? 'View all post' : 'Xem tất cả'}}
            </span>
                    <span>
              <img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}" alt="next">
            </span>
                </a>
            </div>
        </div>
        <div class="row justify-content-center laptop-row">
            <!-- Item  Feature -->
            <div class="col-12 col-md-12 col-lg-12 col-xl-5 feature-iot-hub">
                <article class="article-box">
                    <!-- Views, date, comments VISIBLE ON MOBILE -->
                    <div class="article-brief-info d-flex align-items-center d-sm-flex d-md-none">
                        <time>{{ \Carbon\Carbon::parse($iotpinned->created_at)->format('F j, Y') }}</time>
                        <div class="view d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                            <span class="text-uppercase">{{$iotpinned->view_count}}</span>
                        </div>
                        <div class="comments d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                            <span>{{$iotpinned->chat_count}}</span>
                        </div>
                        <div class="share d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                            <span>{{$iotpinned->share_count}}</span>
                        </div>
                    </div>
                    <!-- Feature img, title, description -->
                    <div class="article-detail">
                        <a href="{{route('iotHubDetail', ['id' => $iotpinned->pinned_id])}}" target="_blank" rel="noopener noreferrer">
                            <div class="img-box">
                                <img class="img-fluid thumbnail" src="{{asset('public/img/iothub/' . $iotpinned->cover)}}" alt="article">
                                  @if($iotpinned->video_url)
                                <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}" alt="play">@endif
                            </div>

                            <h3 class="text-black">{{$iotpinned->title}}</h3>
                            <p>
                               {{$iotpinned->short_desc}}
                            </p>
                        </a>
                        <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                            <time>{{ \Carbon\Carbon::parse($iotpinned->created_at)->format('F j, Y') }}</time>
                            <div class="view d-flex align-items-center">
                                <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                                <span class="text-uppercase">{{$iotpinned->view_count}}</span>
                            </div>

                        </div>
                    </div>
                </article>

            </div>
            <!-- End item  -->
            <div class="col-12  col-md-12 col-lg-12 col-xl-7 px-0">
                 @foreach($iothub as $item)
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 ">
                    <article class="article-box-2 article-box mb-0 pt-0">
                        <a href="{{route('iotHubDetail', ['id' => $item->id])}}" target="_blank" rel="noopener noreferrer">
                            <!-- Title visible on mobile  -->
                            <h3 class="d-block d-md-none">{{$item->title}}</h3>

                            <!-- Details  -->
                            <div class="article-detail row mx-0 ">
                                <div class="feature-img col-5 col-md-4 col-lg-4 col-xl-4 pl-0 img-box">
                                    <div class="img-box">
                                        <img src="{{asset('public/img/iothub/' . $item->cover)}}" class="img-fluid w-100" alt="article">
                                            @if($item->video_url)
                                        <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}" alt="play">
                                        @endif
                                    </div>
                                </div>
                                <div class="article-info col-7 col-md-8 col-lg-8 col-xl-8 px-0">
                                    <!-- Title visible on laptop  -->
                                    <h3 class="d-none d-lg-block">{{$item->title}}</h3>
                                    <p class="mb-0">
                                        {{$item->short_desc}}...
                                    </p>
                                    <div class="d-flex time-and-view align-items-center">
                                        <time>{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') }}</time>
                                        <div class="view d-flex align-items-center">
                                            <img height="16" src="{{asset('public/assets/images/mobile/icons/icn-eye-15.png')}}" alt="views" class="img-fluid">
                                            <span class="text-uppercase">{{$item->view_count}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </article>

                </div>
                @endforeach
            </div>

            <!-- {{session('lang') == 'en' ? 'View more' : 'Xem thêm'}} on mobile -->
            <a href="{{ route('IotHub') }}" class="text-uppercase text-center d-lg-none view-more-articles">
                <span>
            {{session('lang') == 'en' ? 'View all post' : 'Xem tất cả'}}
          </span>
                <span>
            <img src="{{asset('public/assets/images/mobile/icons/icn-arrow-next-blue.png')}}" alt="next">
          </span>
            </a>
        </div>
    </div>
</section>
<!-- // IOT HUB  -->
@endsection