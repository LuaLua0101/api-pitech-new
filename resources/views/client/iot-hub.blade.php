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
  <section class="teach-series-articles d-none d-lg-block pb-0">
    <div class="container">
      <article class="article-box ">
        <div class="row article-detail">
          <div class="col-12 col-xl-6 align-self-center">
            <a href="{{route('iotHubDetail', ['id' => $iothubpinned->pinned_id])}}" rel="noopener noreferrer"> <h3 class="d-none d-lg-block text-white text-left">{{ $iothubpinned->title}}</h3>
</a>
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
                <img class="play-btn" src="{{asset('public/assets/images/mobile/icons/icn-play.png')}}" alt="play">@endif
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
                  <div class="img-box">
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
          <b>{{session('lang') == 'en' ? 'View more' : 'Xem thêm'}}</b>
        </span>
        <span>
          <img src="{{ asset('public/assets/images/mobile/icons/icn-arrow-down-techseries.png')}}" alt="next">
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
                  res.forEach(item => htmlTeachMe += '<div class="col-12 col-md-4 col-lg-6 col-xl-4">'
                    + '<article class="article-box">'
                     + '<div class="article-brief-info d-flex align-items-center d-block d-md-none">'
                        + '<time>' + moment(item['created_at']).format("MMMM D, YYYY") + '</time>'
                          + '<div class="view d-flex align-items-center">'
                            + '<img src="./assets/images/mobile/icons/icn-eye.png" alt="views" class="img-fluid">'
                              + '<span class="text-uppercase">' +item['view_count']+ '</span>'
                            + '</div>'
                            + '<div class="comments d-flex align-items-center">'
                              + '<img src="./assets/images/mobile/icons/icn-chat.png" alt="comment" class="img-fluid">'
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
                                        + item['video_url'] && '<img class="play-btn" src="./assets/images/mobile/icons/icn-play.png" alt="play">'
                                    + '</div>'
                                + '</div>'
                                + '<div class="col-12 col-xl-12 right-block">'
                                    + '<a href="teach-me-serie/' + item['id']+ '" rel="noopener noreferrer">'
                                        + '<h3 class="text-black">'+item['title']+ '</h3>'
                                        + '<p style="line-height: 1.5em;height: 4.5em;overflow: hidden;">'+item['short_desc']+ '</p>'
                                    + '</a>'
                                    + '<div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">'
                                        + '<time>' + moment(item['created_at']).format("MMMM D, YYYY") + '</time>'
                                        + '<div class="view d-flex align-items-center">'
                                            + '<img src="./assets/images/mobile/icons/icn-eye.png" alt="views"'
                                                + 'class="img-fluid">'
                                            + '<span class="text-uppercase">' +item['view_count']+ '</span>'
                                        + '</div>'
                                    + '</div>'
                                + '</div>'
                            + '</div>'
                        + '</div>'
                    + '</article>'
                + '</div>');
                  $('#iothub-show-more').html( $('#iothub-show-more').html() + htmlTeachMe)
                }
              });
            };
    </script>
@endsection