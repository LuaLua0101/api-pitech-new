@extends('layouts.client')

@section('teachme', 'active')

@section('content')
@if($data->video_url && !preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]))
    <div class="article-breadcum breadcum video-background">
        <!-- Integrate with Youtube video and plugin   -->
        {{-- <div class="overlay-player-top overlay-player"></div> --}}
        <div id="ytbg" data-youtube="{{$data->video_url}}"></div>
        {{-- <div class="overlay-player-bottom  overlay-player"></div> --}}
        
        <!-- Text  -->
        <div class="article-breadcum-text ">
            <div class="container text-center video-breadcum-text">
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12">
                        <!-- As number of words in laptop & mobile is different so 2 tags of h2 here  -->
                        <h2 class="breadcum-title d-lg-none">{{$data->title}}</h2>
                        <h2 class="breadcum-title d-none d-lg-block">
                           {{$data->title}}
                        </h2>
                        <p class="article-desc d-lg-none">
                           {{$data->short_desc}}
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>
@else
<div class="article-breadcum breadcum">
        <div class="overlay-bg"></div>
        <div class="article-breadcum-text">
            <div class="container text-center ">
                <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12">
                        <!-- As number of words in laptop & mobile is different so 2 tags of h2 here  -->
                        <h2 class="breadcum-title d-lg-none">{{$data->title}}</h2>
                        <h2 class="breadcum-title d-none d-lg-block">
                                {{$data->title}}
                        </h2>
                        <p class="article-desc d-lg-none">
                           {{$data->short_desc}}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endif
    <!-- Main article  -->
    <section class="main-article">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 col-xl-12 feature-iot-hub">
                    <article class="article-box border-bottom-0">
                        <!-- Views, date, comments VISIBLE ON MOBILE -->
                        <div class="article-brief-info d-flex align-items-center">
                            <time>{{ \Carbon\Carbon::parse($data->created_at)->format('F j, Y') }}</time>
                            <div class="view d-flex align-items-center">
                                <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                                <span class="text-uppercase">{{$data->view_count}}</span>
                            </div>
                            <div class="comments d-flex align-items-center">
                                <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                                <span>{{$data->chat_count}}</span>
                            </div>
                            <div class="share d-flex align-items-center">
                                <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                                <span>{{$data->share_count}}</span>
                            </div>
                        </div>
                        <!-- Feature img, title, description -->
                        <div class="article-detail">
                              {!! $data->content !!}
                        </div>
                    </article>
                    <!-- Sharing  -->
                    <div class="sharing">
                        <!-- Backend implement here  -->

                        <div class="sharing-box">
                            <div class="d-none d-lg-block caption">{{session('lang') == 'en' ? 'Share this' : 'Chia sẻ'}}... </div>
                            <a class="fbsharelink" data-shareurl="{{url()->current()}}">
                                <img src="{{asset('public/assets/images/laptop/icn/icn-fb.png')}}" alt="social network">
                            </a>
                            <a href="mailto:contact@pitech.asia">
                                <img src="{{asset('public/assets/images/laptop/icn/icn-gmail.png')}}" alt="social network">
                            </a>
                        </div>
                    </div>
                    <!-- // Sharing  -->

                </div>

            </div>
        </div>
    </section>
    <section class="comment-box">
        <div class="container">
            <div class="caption">{{session('lang') == 'en' ? 'Leave a reply' : 'Để lại bình luận'}}</div>
            <form action="#" id="teachMeForm" name="teachMeForm">
                {{ csrf_field() }}
                 <input name="id" id="id" style="display: none" value="{{$data->id}}">
                <div class="form-group">
                    <input type="text" name="name" id="name" class=" custom-input form-control" placeholder="{{session('lang') == 'en' ? 'Name' : 'Họ tên'}}"
                        aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <input type="text" name="email" id="email" class=" custom-input form-control" placeholder="Email"
                        aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <textarea class="form-control custom-input " placeholder="{{session('lang') == 'en' ? 'Message' : 'Nội dung'}}" name="content" id="content"
                        rows="3"></textarea>
                </div>
                <button type="submit" class="btn submit-btn text-capitalize">{{session('lang') == 'en' ? 'Send Message' : 'Gửi bình luận'}}</button>
            </form>
        </div>
    </section>
    <script>
        $(function () {
$('#teachMeForm').on('submit', function (e) {
              e.preventDefault();

              $.ajax({
                type: 'post',
                url: "{{route('teachMeComment')}}",
                data: $('#teachMeForm').serialize(),
                success: function () {
                  alert('Gửi bình luận thành công');
                }
              });
            });
        }); 

        
    </script>
@endsection
