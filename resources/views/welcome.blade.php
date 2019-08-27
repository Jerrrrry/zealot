@extends('layout.app')
@section('title', 'Home|Marijuana Book')
@section('keywords', 'Marijuana,Cannabis,Weeds,Buds,Cook Book,Marijuana Know How')
@section('content')
<!-- ****** Categories Area Start ****** -->
<section class="categories_area clearfix" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="/img/catagory-img/indica.jpg" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h5>Indica</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".6s">
                        <img src="/img/catagory-img/sativa.jpg" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h5>Sativa</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                        <img src="/img/catagory-img/hybrid.jpg" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h5>Hybrid</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Categories Area End ****** -->

    <!-- ****** Blog Area Start ****** -->
    <section class="blog_area section_padding_0_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row">

                        <!-- Single Post -->
                        <div class="col-12">
                            <div class="single-post wow fadeInUp" data-wow-delay=".2s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="img/blog-img/topnews.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="post-author">
                                                <a href="#">By Jimi Devine</a>
                                            </div>
                                            <!-- Post Date -->
                                            <div class="post-date">
                                                <a href="#">August 14, 2019</a>
                                            </div>
                                        </div>
                                        <!-- Post Comment & Share Area -->
                                        <div class="post-comment-share-area d-flex">
                                            <!-- Post Favourite -->
                                            <div class="post-favourite">
                                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 10</a>
                                            </div>
                                            <!-- Post Comments -->
                                            <div class="post-comments">
                                                <a href="#"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                                            </div>
                                            <!-- Post Share -->
                                            <div class="post-share">
                                                <a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <h2 class="post-headline">California’s Underground Market Is Nearly 3 Times Larger Than Legal Market</h2>
                                    </a>
                                    <p>A new report details the highs and lows of California’s cannabis industry since the state launched its adult-use regulations on Jan. 1, 2018.</p>
                                    <a href="https://cannabisnow.com/californias-underground-market-is-nearly-3-times-larger-than-legal-market/" class="read-more">Continue Reading..</a>
                                </div>
                            </div>
                        </div>
                        @component('components.singleposts',['ms' => $ms])@endcomponent
                        <!-- ******* List Blog Area Start ******* -->

                    </div>
                </div>

                <!-- ****** Blog Sidebar ****** -->
                @component('components.sidebar')@endcomponent
            </div>
        </div>
    </section>
    <!-- ****** Blog Area End ****** -->    
@endsection