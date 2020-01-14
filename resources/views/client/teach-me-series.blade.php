@extends('layouts.client')

@section('teachme', 'active')

@section('content')
 <!-- Intro  -->
  <section class="intro gradient-bg text-white">
    <div class="container text-center">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
          <h2 class="text-uppercase font-weight-bold">Lorem ipsum dolor, sit amet coM sit</h2>
          <p>
            Lorem ipsum dolor sit amet, cononummy nibh euismod tincidunt ectetuer adipiscing elit, sed diam nonummy nibh
            euismod tincidunt
          </p>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6 px-0">
          <img class="img-fluid d-none d-sm-block  " src="{{asset('public/assets/images/laptop/feature-img/intro-img-2.png')}}"
            alt="image">
          <img class="img-fluid d-block d-sm-none w-100" src="./assets/images/mobile/feature-img/home-intro-bg.png"
            alt="">
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
            <img class="img-fluid" src="./assets/images/laptop/feature-img/img-app.png" alt="">

          </div>
          <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">NEW UPDATE PACH V4.3</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                  euismod
                  tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                <a href="#" target="_blank" class="text-capitalize d-none d-sm-block learn-more">
                  LEARN MORE
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
              <a href="#" class="text-center view-more-articles">
                <span>
                  View all post
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
                    <img src="./assets/images/laptop/article/feature-article-laptop.png" alt="feature article">
                    <img class="play-btn" src="./assets/images/mobile/icons/icn-play.png" alt="play">
                  </div>

                </a>
              </div>
              <div class="col-md-6 col-xl-6 right-block">

                <!-- Views, title, link -->
                <div class="article-brief-info d-flex align-items-center">
                  <time>December 25, 2019</time>
                  <div class="view d-flex align-items-center">
                    <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                    <span class="text-uppercase">1.2k</span>
                  </div>

                </div>

                <h3 class="text-black">LOREM IPSUM DOLOR DOLOR SIT AMET</h3>
                <p>
                  Huawei vừa giới thiệu mẫu loa thông minh cao cấp mang tên Sound X, được phát triển và thiết kế bởi
                  thương hiệu âm thanh High-End Devialet đến từ Pháp.
                </p>
                <a href="#" class="text-capitalize d-none d-sm-block learn-more" target="_blank"
                  rel="noopener noreferrer">Learn more</a>
              </div>
            </div>
          </article>
        </div>

        <!-- End item feature laptop  -->
        <!--============= ITEMS ARTICLES - 2 FOR MOBILE, 6 FOR LAPTOP * NOTE (Item display on left and right
          side is slightly different) -=============-->
        <!-- Item mobile -->
        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
          <article class="article-box">
            <!-- Views, date, comments-->
            <div class="article-brief-info d-flex align-items-center d-block d-md-none">
              <time>December 25, 2019</time>
              <div class="view d-flex align-items-center">
                <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                <span class="text-uppercase">1.2k</span>
              </div>
              <div class="comments d-flex align-items-center">
                <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                <span>12</span>
              </div>
              <div class="share d-flex align-items-center">
                <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                <span>302</span>
              </div>
            </div>
            <!-- Feature img, title, description -->
            <div class="article-detail secondary-article secondary-article--left">
              <div class="row">
                <div class="col-12 col-xl-7 left-block">
                  <div class="img-box">
                    <img class="img-fluid thumbnail" src="./assets/images/laptop/article/fox-article.png" alt="article">
                    <img class="play-btn" src="./assets/images/mobile/icons/icn-play.png" alt="play">
                  </div>
                </div>
                <div class="col-12 col-xl-5 right-block">
                  <a href="#" target="_blank" rel="noopener noreferrer">
                    <h3 class="text-black">Huawei Sound X - Loa thông minh Hi-Res Audio đầu tiên, Devialet thiết kế, âm
                      thanh.</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, labore.
                      Lorem ipsum dolor sit amet.
                    </p>
                  </a>
                  <!-- Views, date visible on laptop-->
                  <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                    <time>December 25, 2019</time>
                    <div class="view d-flex align-items-center">
                      <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                      <span class="text-uppercase">1.2k</span>
                    </div>

                  </div>
                </div>

              </div>

            </div>
          </article>


        </div>
        <!-- End item  -->
         <!-- Item mobile -->
         <div class="col-12 col-md-6 col-lg-6 col-xl-6">
            <article class="article-box">
              <!-- Views, date, comments-->
              <div class="article-brief-info d-flex align-items-center d-block d-md-none">
                <time>December 25, 2019</time>
                <div class="view d-flex align-items-center">
                  <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                  <span class="text-uppercase">1.2k</span>
                </div>
                <div class="comments d-flex align-items-center">
                  <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                  <span>12</span>
                </div>
                <div class="share d-flex align-items-center">
                  <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                  <span>302</span>
                </div>
              </div>
              <!-- Feature img, title, description -->
              <div class="article-detail secondary-article secondary-article--right">
                <div class="row">
                  <div class="col-12 col-xl-7 left-block">
                    <div class="img-box">
                      <img class="img-fluid thumbnail" src="./assets/images/laptop/article/fox-article.png" alt="article">
                      <img class="play-btn" src="./assets/images/mobile/icons/icn-play.png" alt="play">
                    </div>
                  </div>
                  <div class="col-12 col-xl-5 right-block">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                      <h3 class="text-black">Huawei Sound X - Loa thông minh Hi-Res Audio đầu tiên, Devialet thiết kế, âm
                        thanh.</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, labore.
                        Lorem ipsum dolor sit amet.
                      </p>
                    </a>
                    <!-- Views, date visible on laptop-->
                    <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                      <time>December 25, 2019</time>
                      <div class="view d-flex align-items-center">
                        <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                        <span class="text-uppercase">1.2k</span>
                      </div>
  
                    </div>
                  </div>
  
                </div>
  
              </div>
            </article>
  
  
          </div>
          <!-- End item  -->
         
        <!--================= HIDE REST ITEMS ON MOBILE================= -->
          <!-- Item mobile -->
          <div class="col-12 col-md-6 col-lg-6 col-xl-6 d-none d-lg-block">
              <article class="article-box">
                <!-- Views, date, comments-->
                <div class="article-brief-info d-flex align-items-center d-block d-md-none">
                  <time>December 25, 2019</time>
                  <div class="view d-flex align-items-center">
                    <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                    <span class="text-uppercase">1.2k</span>
                  </div>
                  <div class="comments d-flex align-items-center">
                    <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                    <span>12</span>
                  </div>
                  <div class="share d-flex align-items-center">
                    <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                    <span>302</span>
                  </div>
                </div>
                <!-- Feature img, title, description -->
                <div class="article-detail secondary-article secondary-article--left">
                  <div class="row">
                    <div class="col-12 col-xl-7 left-block">
                      <div class="img-box">
                        <img class="img-fluid thumbnail" src="./assets/images/laptop/article/beaver-clipping.png" alt="article">
                        <img class="play-btn" src="./assets/images/mobile/icons/icn-play.png" alt="play">
                      </div>
                    </div>
                    <div class="col-12 col-xl-5 right-block">
                      <a href="#" target="_blank" rel="noopener noreferrer">
                        <h3 class="text-black">Huawei Sound X - Loa thông minh Hi-Res Audio đầu tiên, Devialet thiết kế, âm
                          thanh.</h3>
                        <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, labore.
                          Lorem ipsum dolor sit amet.
                        </p>
                      </a>
                      <!-- Views, date visible on laptop-->
                      <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                        <time>December 25, 2019</time>
                        <div class="view d-flex align-items-center">
                          <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                          <span class="text-uppercase">1.2k</span>
                        </div>
    
                      </div>
                    </div>
    
                  </div>
    
                </div>
              </article>
    
    
            </div>
            <!-- End item  -->
             <!-- Item mobile -->
             <div class="col-12 col-md-6 col-lg-6 col-xl-6 d-none d-lg-block">
                <article class="article-box">
                  <!-- Views, date, comments-->
                  <div class="article-brief-info d-flex align-items-center d-block d-md-none">
                    <time>December 25, 2019</time>
                    <div class="view d-flex align-items-center">
                      <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                      <span class="text-uppercase">1.2k</span>
                    </div>
                    <div class="comments d-flex align-items-center">
                      <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                      <span>12</span>
                    </div>
                    <div class="share d-flex align-items-center">
                      <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                      <span>302</span>
                    </div>
                  </div>
                  <!-- Feature img, title, description -->
                  <div class="article-detail secondary-article secondary-article--right">
                    <div class="row">
                      <div class="col-12 col-xl-7 left-block">
                        <div class="img-box">
                          <img class="img-fluid thumbnail" src="./assets/images/laptop/article/beaver-clipping.png" alt="article">
                          <img class="play-btn" src="./assets/images/mobile/icons/icn-play.png" alt="play">
                        </div>
                      </div>
                      <div class="col-12 col-xl-5 right-block">
                        <a href="#" target="_blank" rel="noopener noreferrer">
                          <h3 class="text-black">Huawei Sound X - Loa thông minh Hi-Res Audio đầu tiên, Devialet thiết kế, âm
                            thanh.</h3>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, labore.
                            Lorem ipsum dolor sit amet.
                          </p>
                        </a>
                        <!-- Views, date visible on laptop-->
                        <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                          <time>December 25, 2019</time>
                          <div class="view d-flex align-items-center">
                            <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                            <span class="text-uppercase">1.2k</span>
                          </div>
      
                        </div>
                      </div>
      
                    </div>
      
                  </div>
                </article>
      
      
              </div>
              <!-- End item  -->
       <!-- Item mobile -->
       <div class="col-12 col-md-6 col-lg-6 col-xl-6 d-none d-lg-block">
          <article class="article-box">
            <!-- Views, date, comments-->
            <div class="article-brief-info d-flex align-items-center d-block d-md-none">
              <time>December 25, 2019</time>
              <div class="view d-flex align-items-center">
                <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                <span class="text-uppercase">1.2k</span>
              </div>
              <div class="comments d-flex align-items-center">
                <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                <span>12</span>
              </div>
              <div class="share d-flex align-items-center">
                <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                <span>302</span>
              </div>
            </div>
            <!-- Feature img, title, description -->
            <div class="article-detail secondary-article secondary-article--left">
              <div class="row">
                <div class="col-12 col-xl-7 left-block">
                  <div class="img-box">
                    <img class="img-fluid thumbnail" src="./assets/images/laptop/article/deer.png" alt="article">
                    <img class="play-btn" src="./assets/images/mobile/icons/icn-play.png" alt="play">
                  </div>
                </div>
                <div class="col-12 col-xl-5 right-block">
                  <a href="#" target="_blank" rel="noopener noreferrer">
                    <h3 class="text-black">Huawei Sound X - Loa thông minh Hi-Res Audio đầu tiên, Devialet thiết kế, âm
                      thanh.</h3>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, labore.
                      Lorem ipsum dolor sit amet.
                    </p>
                  </a>
                  <!-- Views, date visible on laptop-->
                  <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                    <time>December 25, 2019</time>
                    <div class="view d-flex align-items-center">
                      <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                      <span class="text-uppercase">1.2k</span>
                    </div>

                  </div>
                </div>

              </div>

            </div>
          </article>


        </div>
        <!-- End item  -->
         <!-- Item mobile -->
         <div class="col-12 col-md-6 col-lg-6 col-xl-6 d-none d-lg-block">
            <article class="article-box">
              <!-- Views, date, comments-->
              <div class="article-brief-info d-flex align-items-center d-block d-md-none">
                <time>December 25, 2019</time>
                <div class="view d-flex align-items-center">
                  <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                  <span class="text-uppercase">1.2k</span>
                </div>
                <div class="comments d-flex align-items-center">
                  <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                  <span>12</span>
                </div>
                <div class="share d-flex align-items-center">
                  <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                  <span>302</span>
                </div>
              </div>
              <!-- Feature img, title, description -->
              <div class="article-detail secondary-article secondary-article--right">
                <div class="row">
                  <div class="col-12 col-xl-7 left-block">
                    <div class="img-box">
                      <img class="img-fluid thumbnail" src="./assets/images/laptop/article/deer.png" alt="article">
                      <img class="play-btn" src="./assets/images/mobile/icons/icn-play.png" alt="play">
                    </div>
                  </div>
                  <div class="col-12 col-xl-5 right-block">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                      <h3 class="text-black">Huawei Sound X - Loa thông minh Hi-Res Audio đầu tiên, Devialet thiết kế, âm
                        thanh.</h3>
                      <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, labore.
                        Lorem ipsum dolor sit amet.
                      </p>
                    </a>
                    <!-- Views, date visible on laptop-->
                    <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                      <time>December 25, 2019</time>
                      <div class="view d-flex align-items-center">
                        <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                        <span class="text-uppercase">1.2k</span>
                      </div>
  
                    </div>
                  </div>
  
                </div>
  
              </div>
            </article>
  
  
          </div>
          <!-- End item  -->
       


        <!-- View more - VISIBLE ON MOBILE ALSO -->
        <a href="#" class="text-uppercase text-center d-block d-lg-none view-more-articles">
          <span>
            View all post
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
          <a href="#" class="text-center view-more-articles">
            <span>
              View all post
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
              <time>December 25, 2019</time>
              <div class="view d-flex align-items-center">
                <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                <span class="text-uppercase">1.2k</span>
              </div>
              <div class="comments d-flex align-items-center">
                <img src="{{asset('public/assets/images/mobile/icons/icn-chat.png')}}" alt="comment" class="img-fluid">
                <span>12</span>
              </div>
              <div class="share d-flex align-items-center">
                <img src="{{asset('public/assets/images/mobile/icons/icn-share.png')}}" alt="share" class="img-fluid">
                <span>302</span>
              </div>
            </div>
            <!-- Feature img, title, description -->
            <div class="article-detail">
              <a href="#" target="_blank" rel="noopener noreferrer">
                <div class="img-box">
                  <img class="img-fluid thumbnail" src="./assets/images/laptop/article/tech.png" alt="article">
                  <img class="play-btn" src="./assets/images/mobile/icons/icn-play.png" alt="play">
                </div>

                <h3 class="text-black">Huawei Sound X - Loa thông minh Hi-Res Audio đầu tiên, Devialet thiết kế, âm
                  thanh.</h3>
                <p>
                  Huawei vừa giới thiệu mẫu loa thông minh cao cấp mang tên Sound X, được phát triển và thiết kế bởi
                  thương hiệu âm thanh High-End Devialet đến từ Pháp.
                </p>
              </a>
              <div class="article-brief-info align-items-center d-none d-sm-none d-md-flex">
                <time>December 25, 2019</time>
                <div class="view d-flex align-items-center">
                  <img src="{{asset('public/assets/images/mobile/icons/icn-eye.png')}}" alt="views" class="img-fluid">
                  <span class="text-uppercase">1.2k</span>
                </div>

              </div>
            </div>
          </article>


        </div>
        <!-- End item  -->
        <div class="col-12  col-md-12 col-lg-12 col-xl-7 px-0">
          <!-- Item style 2  -->
          <div class="col-12 col-md-12 col-lg-12 col-xl-12 ">
            <article class="article-box-2 article-box mb-0 pt-0">
              <a href="#" target="_blank" rel="noopener noreferrer">
                <!-- Title visible on mobile  -->
                <h3 class="d-block d-md-none">Huawei Sound X - Loa thông minh Hi-Res Audio
                  đầu tiên, Devialet thiết kế, âm thanh Surround</h3>

                <!-- Details  -->
                <div class="article-detail row mx-0 ">
                  <div class="feature-img col-5 col-md-4 col-lg-4 col-xl-4 pl-0 img-box">
                    <div class="img-box">
                      <img src="./assets/images/laptop/article/fox-article.png" class="img-fluid w-100" alt="article">
                      <img class="play-btn" src="./assets/images/mobile/icons/icn-play.png" alt="play">
                    </div>
                  </div>
                  <div class="article-info col-7 col-md-8 col-lg-8 col-xl-8 px-0">
                    <!-- Title visible on laptop  -->
                    <h3 class="d-none d-lg-block">Huawei Sound X - Loa thông minh Hi-Res Audio
                      đầu tiên, Devialet thiết kế, âm thanh Surround</h3>
                    <p class="mb-0">
                      Huawei vừa giới thiệu mẫu loa thông minh cao cấp mang tên Sound X, được...
                    </p>
                    <div class="d-flex time-and-view align-items-center">
                      <time>December 25, 2019</time>
                      <div class="view d-flex align-items-center">
                        <img height="16" src="{{asset('public/assets/images/mobile/icons/icn-eye-15.png')}}" alt="views"
                          class="img-fluid">
                        <span class="text-uppercase">1.2k</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </article>


          </div>
          <!-- End item style 2  -->
          <!-- Item style 2 ---- NOTE: ITEMS 2,3 has class pt-0 -->
          <div class="col-12 col-md-12 col-lg-12 col-xl-12 ">
            <article class="article-box-2 article-box mb-0 pt-0 ">
              <a href="#" target="_blank" rel="noopener noreferrer">
                <!-- Title visible on mobile  -->
                <h3 class="d-block d-md-none">Huawei Sound X - Loa thông minh Hi-Res Audio
                  đầu tiên, Devialet thiết kế, âm thanh Surround</h3>

                <!-- Details  -->
                <div class="article-detail row mx-0">
                  <div class="feature-img col-5 col-md-4 col-lg-4 col-xl-4 pl-0">
                    <div class="img-box">
                      <img src="./assets/images/laptop/article/deer.png" class="img-fluid w-100" alt="article">
                    </div>
                  </div>
                  <div class="article-info col-7 col-md-8 col-lg-8 col-xl-8 px-0">
                    <!-- Title visible on laptop  -->
                    <h3 class="d-none d-lg-block">Huawei Sound X - Loa thông minh Hi-Res Audio
                      đầu tiên, Devialet thiết kế, âm thanh Surround</h3>
                    <p class="mb-0">
                      Huawei vừa giới thiệu mẫu loa thông minh cao cấp mang tên Sound X, được...
                    </p>
                    <div class="d-flex time-and-view align-items-center">
                      <time>December 25, 2019</time>
                      <div class="view d-flex align-items-center">
                        <img height="16" src="{{asset('public/assets/images/mobile/icons/icn-eye-15.png')}}" alt="views"
                          class="img-fluid">
                        <span class="text-uppercase">1.2k</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </article>


          </div>
          <!-- End item style 2  -->
          <!-- Item style 2  -->
          <div class="col-12 col-md-12 col-lg-12 col-xl-12  ">
            <article class="article-box-2 article-box mb-0 pt-0 pb-0">
              <a href="#" target="_blank" rel="noopener noreferrer">
                <!-- Title visible on mobile  -->
                <h3 class="d-block d-md-none">Huawei Sound X - Loa thông minh Hi-Res Audio
                  đầu tiên, Devialet thiết kế, âm thanh Surround</h3>

                <!-- Details  -->
                <div class="article-detail row mx-0">
                  <div class="feature-img col-5 col-md-4 col-lg-4 col-xl-4 pl-0">
                    <div class="img-box">
                      <img src="./assets/images/laptop/article/beaver.png" class="img-fluid w-100" alt="article">
                    </div>
                   
                  </div>
                  <div class="article-info col-7 col-md-8 col-lg-8 col-xl-8 px-0">
                    <!-- Title visible on laptop  -->
                    <h3 class="d-none d-lg-block">Huawei Sound X - Loa thông minh Hi-Res Audio
                      đầu tiên, Devialet thiết kế, âm thanh Surround</h3>
                    <p class="mb-0">
                      Huawei vừa giới thiệu mẫu loa thông minh cao cấp mang tên Sound X, được...
                    </p>
                    <div class="d-flex time-and-view align-items-center">
                      <time>December 25, 2019</time>
                      <div class="view d-flex align-items-center">
                        <img height="16" src="{{asset('public/assets/images/mobile/icons/icn-eye-15.png')}}" alt="views"
                          class="img-fluid">
                        <span class="text-uppercase">1.2k</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </article>


          </div>
          <!-- End item style 2  -->
        </div>

        <!-- View more on mobile -->
        <a href="#" class="text-uppercase text-center d-lg-none view-more-articles">
          <span>
            View all post
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