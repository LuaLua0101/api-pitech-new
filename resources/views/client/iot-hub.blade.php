@extends('layouts.client')

@section('iothub', 'active')

@section('content')
 <!-- Bread cum  -->
  <section class="breadcum iot-page-breadcum" style="padding-bottom:0">
    <div class="container text-center">
      <h2 class="breadcum-title">IOT Hub</h2>
      <p>
        {{$banner->content}}
      </p>
    </div>
  </section>
  <!-- Intro  -->
  <section class="teach-series-articles d-none d-lg-block pb-0 bg-mobile" style="background-image: url({{asset('public/img/iothub/' . $iothubpinned->cover)}}); background-repeat: no-repeat; background-size:cover;">
    <div class="overlay-bg-mobile"></div>
    <div class="container">
      <article class="article-box bg-desktop" style="background-image: url({{asset('public/img/iothub/' . $iothubpinned->cover)}}); background-repeat: no-repeat; background-size:cover;">
        <div class="overlay-bg-desktop"></div>
        <div class="row article-detail">
          <div class="col-12 col-xl-6 align-self-center">
            <a href="{{route('iotHubDetail', ['id' => $iothubpinned->pinned_id])}}" rel="noopener noreferrer">
              <h3 class="d-none d-lg-block text-white text-left">{{ $iothubpinned->title}}</h3></a>
            <p class="text-white">
             {{ $iothubpinned->short_desc}}
            </p>
          </div>
          <div class="col-12 col-xl-6 ">
            <a href="{{route('iotHubDetail', ['id' => $iothubpinned->pinned_id])}}" rel="noopener noreferrer">
              <div class="img-box">
                <img class="img-fluid"  src="{{asset('public/img/iothub/' . $iothubpinned->cover)}}"
                  alt="feature article">
                   @if($iothubpinned->video_url)
                <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}" alt="play">
                @endif
              </div>
            </a>
          </div>
        </div>
      </article>
    </div>
  </section>
  <!-- Sub articles: 5 on mobiles and , 12 on laptop (3 articles/row)  -->
  <section class="teach-series-sub-articles iot-hubs-sub-articles">
    <div class="container">
      <div class="row"  id="iothub-show-more" name="iothub-show-more">
     @foreach($iothub as $item)          
        <!-- Item style 2  -->
        <div class="col-12 col-md-12 col-lg-4 col-xl-4 ">
          <article class="article-box-2 article-box mb-15px ">
            <a href="{{route('iotHubDetail', ['id' => $item->id])}}" rel="noopener noreferrer">
              <!-- Title visible on mobile  -->
              <h3 class="d-block d-md-none">{{$item->title}}</h3>
              <!-- Details  -->
              <div class="article-detail row mx-0 ">
                <div class="feature-img col-5 col-md-5 col-lg-12 col-xl-12 pl-0 img-box">
                  <div class="img-box"  style="border-radius: 10px">
                    <img  src="{{asset('public/img/iothub/' . $item->cover)}}" class="img-fluid w-100" alt="article">
                    @if($item->video_url)
                    <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}" alt="play">@endif
                  </div>
                </div>
                <div class="article-info col-7 col-md-7 col-lg-12 col-xl-12 px-0">
                  <!-- Title visible on laptop  -->
                  <h3 class="d-none d-md-block">{{$item->title}}</h3>
                  <p class="mb-0"  style="line-height: 1.5em;height: 4.5em;overflow: hidden;">
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
    <!-- End item style 2  -->
    @endforeach
      </div>
      <div class="text-uppercase mx-auto justify-content-center d-flex align-items-center view-more-articles"
       id="iothub-load-more" name="iothub-load-more" style="cursor: pointer" onClick="iotHubLoadMore(skip)">
        <span>
          <b>{{session('lang') == 'en' ? 'View more' : 'Xem thêm'}} <i class="fa fa-angle-down" style="color: #1261D6"></i></b>
        </span>
      </div>
    </div>
  </section>
   <script>
     var skip = 6;
            function iotHubLoadMore(length) {
              console.log(length)
              $.ajax({
                type: 'get',
                url: "iot-hub-loadmore/" + length,
                success: function (res) {
                    skip += res.length
                  let htmlTeachMe = '';
                  res.forEach(item => htmlTeachMe += item['video_url'] ? '<div class="col-12 col-md-12 col-lg-4 col-xl-4 ">'
                    + '<article class="article-box-2 article-box mb-15px ">'
                      + '<a href="teach-me-serie/' + item['id']+ '" rel="noopener noreferrer">'
                        + '<h3 class="d-block d-md-none">' +item['title'] + '</h3>'
                        + '<div class="article-detail row mx-0 ">'
                          + '<div class="feature-img col-5 col-md-5 col-lg-12 col-xl-12 pl-0 img-box">'
                            + '<div class="img-box"  style="border-radius: 10px">'
                              + '<img class="img-fluid thumbnail" src="./public/img/iothub/' + item['cover'] + '" alt="article">'
                              + '<img class="play-btn" src="./public/assets/images/mobile/icons/icn-play.png" alt="play">'
                              + '</div></div>'
                              + '<div class="article-info col-7 col-md-7 col-lg-12 col-xl-12 px-0">'
                                + '<h3 class="d-none d-md-block">' +item['title'] + '1</h3>'
                                + '<p class="mb-0"  style="line-height: 1.5em;height: 4.5em;overflow: hidden;">'
                                  + item['short_desc'] + '...</p>'
                                  + '<div class="d-flex time-and-view align-items-center">'
                                    + '<time>' + moment(item['created_at']).format("MMMM D, YYYY") + '</time>'
                                    + '<div class="view d-flex align-items-center">'
                                      + '<img src="./public/assets/images/mobile/icons/icn-eye.png" alt="views"'
                                                 + 'class="img-fluid">'
                                      + '<span class="text-uppercase">' +item['view_count'] + '</span>'
                                      + '</div></div></div></div></a></article></div>' : 
                                      '<div class="col-12 col-md-12 col-lg-4 col-xl-4 ">'
                    + '<article class="article-box-2 article-box mb-15px ">'
                      + '<a href="teach-me-serie/' + item['id']+ '" rel="noopener noreferrer">'
                        + '<h3 class="d-block d-md-none">' +item['title'] + '</h3>'
                        + '<div class="article-detail row mx-0 ">'
                          + '<div class="feature-img col-5 col-md-5 col-lg-12 col-xl-12 pl-0 img-box">'
                            + '<div class="img-box"  style="border-radius: 10px">'
                              + '<img class="img-fluid thumbnail" src="./public/img/post/' + item['cover'] + '" alt="article">'
                              + '</div></div>'
                              + '<div class="article-info col-7 col-md-7 col-lg-12 col-xl-12 px-0">'
                                + '<h3 class="d-none d-md-block">' +item['title'] + '1</h3>'
                                + '<p class="mb-0"  style="line-height: 1.5em;height: 4.5em;overflow: hidden;">'
                                  + item['short_desc'] + '...</p>'
                                  + '<div class="d-flex time-and-view align-items-center">'
                                    + '<time>' + moment(item['created_at']).format("MMMM D, YYYY") + '</time>'
                                    + '<div class="view d-flex align-items-center">'
                                      + '<img src="./public/assets/images/mobile/icons/icn-eye.png" alt="views"'
                                                 + 'class="img-fluid">'
                                      + '<span class="text-uppercase">' +item['view_count'] + '</span>'
                                      + '</div></div></div></div></a></article></div>');
                  $('#iothub-show-more').html( $('#iothub-show-more').html() + htmlTeachMe)
                }
              });
            };
    </script>
@endsection