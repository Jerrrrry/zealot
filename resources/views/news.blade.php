@extends('layout.app')
@section('title', 'Latest Popular Marijuana News and Articles')
@section('keywords', 'latest,popular,marijuana,cannabis,event,news')
@section('description','top news and articles related with marijuana, marijuana strains, cannabis, cannabis strains, grow marijuana, marijuana seeds,marijuana laws, marijuana dispensaries')
@section('dctitle','collection of top marijuana related news and articles')
@section('content')
<!-- ****** Blog Area Start ****** -->
<section class="blog_area section_padding_0_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row">
                    @if(is_array(Cache::get('mjarticles')) || is_object(Cache::get('mjarticles')))
                        @foreach(Cache::get('mjarticles') as $article)
                        <!-- Single Post -->
                        <div class="col-12">
                            <div class="single-post wow fadeInUp" data-wow-delay=".2s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="{{$article['urlToImage']}}" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="post-author">
                                                <a href="#">By {{$article['author']}}</a>
                                            </div>
                                            <!-- Post Date -->
                                            <div class="post-date">
                                                <a href="#">{{$article['publishedAt']}}</a>
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
                                    <a href="{{$article['url']}}" target="_blank">
                                        <h2 class="post-headline">{{$article['title']}}</h2>
                                    </a>
                                    <p>{{$article['description']}}</p>
                                    <a href="{{$article['url']}}" target="_blank" class="read-more">Continue Reading..</a>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    @endif

                    </div>
                </div>

                <!-- ****** Blog Sidebar ****** -->
                @component('components.sidebar')@endcomponent
            </div>
        </div>
</section>
@endsection
