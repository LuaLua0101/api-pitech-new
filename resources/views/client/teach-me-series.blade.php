@extends('layouts.client')
@section('title', 'Teach Me Series')
@section('teachme', 'active')

@section('content')

  <!-- Bread cum  -->
    <section class="breadcum">
        <div class="container text-center">
            <h2 class="breadcum-title">Teach me series</h2>
            <h3 class="breadcum-subtitle">{{$banner->title}}</h3>
            <p>
               {{$banner->content}}
            </p>
        </div>
    </section>
    <!-- // Bread cum  -->
    <!-- Feature article -->
    <section class="teach-series-articles">
        <div class="container">
            <article class="article-box border-bottom-0">
                <div class="row article-detail">
                    <div class="col-12 col-xl-6 align-self-center">
                     <a href="{{route('teachMeDetail', ['id' => $teachmepinned->pinned_id])}}"  rel="noopener noreferrer">
                        <h3 class="d-none d-lg-block text-white text-left">{{$teachmepinned->title}}</h3>
                        </a>
                        <p class="text-white">
                            {{$teachmepinned->short_desc}}
                        </p>
                    </div>
                    <div class="col-12 col-xl-6 align-self-center">
                        <a href="{{route('teachMeDetail', ['id' => $teachmepinned->pinned_id])}}"  rel="noopener noreferrer">
                            <div class="img-box">
                                <img class="img-fluid" src="{{asset('public/img/post/' . $teachmepinned->cover)}}"
                                    alt="feature article">
                                    @if($teachmepinned->video_url)
                                <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}" alt="play">@endif
                            </div>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- Sub articles: 5 on mobiles and 12 on laptop (3 articles/row)  -->
    <section class="teach-series-sub-articles">
        <div class="container">
            <div class="row" id="teachme-show-more" name="teachme-show-more">
             @foreach($teachme as $item)  
                <!-- Item  -->
                <div class="col-12 col-md-4 col-lg-6 col-xl-4">
                    <article class="article-box">
                        <!-- Views, date, comments-->
                        <div class="article-brief-info d-flex align-items-center d-block d-md-none">
                            <time>{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') }}</time>
                            <div class="view d-flex align-items-center">
                                <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                                <span class="text-uppercase">{{$item->view_count}}</span>
                            </div>
                            <div class="comments d-flex align-items-center">
                                <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                                <span>{{$item->chat_count}}</span>
                            </div>
                            <div class="share d-flex align-items-center">
                                <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                                <span>{{$item->share_count}}</span>
                            </div>
                        </div>
                        <!-- Feature img, title, description -->
                        <div class="article-detail secondary-article secondary-article--left">
                            <div class="row align-items-center">
                                <div class="col-12 col-xl-12 left-block">
                                    <div class="img-box">
                                        <img class="img-fluid thumbnail"
                                       src="{{asset('public/img/post/' . $item->cover)}}"
                                            alt="article">
                                        @if($item->video_url)
                                        <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}"
                                            alt="play">
                                            @endif
                                    </div>
                                </div>
                                <div class="col-12 col-xl-12 right-block">
                                    <a href="{{route('teachMeDetail', ['id' => $item->id])}}"  rel="noopener noreferrer">
                                        <h3 class="text-black">{{$item->title}}</h3>
                                        <p>
                                            {{$item->short_desc}}
                                        </p>
                                    </a>
                                    <!-- Views, date visible on laptop-->
                                    <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                                        <time>{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') }}</time>
                                        <div class="view d-flex align-items-center">
                                            <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views"
                                                class="img-fluid">
                                            <span class="text-uppercase">{{$item->view_count}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- End item  -->
            @endforeach
            </div>
            <div class="text-uppercase mx-auto justify-content-center d-flex align-items-center view-more-articles"
            id="teach-me-load-more" name="teach-me-load-more" style="cursor: pointer" onClick="teachmeLoadMore(skip)">
                <span>
                    <b>{{session('lang') == 'en' ? 'View more' : 'Xem thêm'}} <i class="fa fa-angle-down" style="color: #1261D6"></i></b>
                </span>
                <!-- <span>
                    <img src="{{ asset('public/assets/images/mobile/icons/icn-arrow-down-techseries.png')}}" alt="next">
                </span> -->
            </div>
        </div>
    </section>
     <script>
     var skip = 6;
            function teachmeLoadMore(length) {
              console.log(length)
              $.ajax({
                type: 'get',
                url: "teach-me-loadmore/" + length,
                success: function (res) {
                    skip += res.length
                  let htmlTeachMe = '';
                  res.forEach(item => htmlTeachMe += '<div class="col-12 col-md-4 col-lg-6 col-xl-4">'
                    + '<article class="article-box">'
                     + '<div class="article-brief-info d-flex align-items-center d-block d-md-none">'
                        + '<time>' + moment(item['created_at']).format("MMMM D, YYYY") + '</time>'
                          + '<div class="view d-flex align-items-center">'
                            + '<img src="./public/assets/images/mobile/icons/icn-eye.png" alt="views" class="img-fluid">'
                              + '<span class="text-uppercase">' +item['view_count']+ '</span>'
                            + '</div>'
                            + '<div class="comments d-flex align-items-center">'
                              + '<img src="./public/assets/images/mobile/icons/icn-chat.png" alt="comment" class="img-fluid">'
                             + '<span>' +item['chat_count']+ '</span>'
                            + '</div>'
                           + '<div class="share d-flex align-items-center">'
                             + '<img src="./assets/images/mobile/icons/icn-share.png" alt="share" class="img-fluid">'
                               + '<span>' +item['share_count']+ '</span>'
                          + '</div>'
                        + '</div>'
                        + '<div class="article-detail secondary-article secondary-article--left">'
                            + '<div class="row align-items-center">'
                                + '<div class="col-12 col-xl-12 left-block">'
                                    + '<div class="img-box">'
                                        + '<img class="img-fluid thumbnail"'
                                            + 'src="./public/img/post/' + item['cover']
                                            + '" alt="article">'
                                        + '<img class="play-btn" src="./public/assets/images/mobile/icons/icn-play.png"'
                                            + 'alt="play">'
                                    + '</div>'
                                + '</div>'
                                + '<div class="col-12 col-xl-12 right-block">'
                                    + '<a href="teach-me-serie/' + item['id']+ '"  rel="noopener noreferrer">'
                                        + '<h3 class="text-black">'+item['title']+ '</h3>'
                                        + '<p>'+item['short_desc']+ '</p>'
                                    + '</a>'
                                    + '<div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">'
                                        + '<time>' + moment(item['created_at']).format("MMMM D, YYYY") + '</time>'
                                        + '<div class="view d-flex align-items-center">'
                                            + '<img src="./public/assets/images/mobile/icons/icn-eye.png" alt="views"'
                                                + 'class="img-fluid">'
                                            + '<span class="text-uppercase">' +item['view_count']+ '</span>'
                                        + '</div>'
                                    + '</div>'
                                + '</div>'
                            + '</div>'
                        + '</div>'
                    + '</article>'
                + '</div>');
                  $('#teachme-show-more').html( $('#teachme-show-more').html() + htmlTeachMe)
                }
              });
            };
    </script>
@endsection