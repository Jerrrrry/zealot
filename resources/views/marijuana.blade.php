@extends('layout.app')
@section('title', 'Marijuana Strain '.$marijuana['data']['Name'].'|What is '.$marijuana['data']['Name'].'|Where to buy Weed Seeds')
@section('keywords', $marijuana['data']['Name'].','.$marijuana['data']['Type'].','.$marijuana['data']['Info'].','.$marijuana['data']['Origins'])
@section('description',$marijuana['data']['Name'].' is '.$marijuana['data']['Type'].' orgins '.$marijuana['data']['Origins'].' flowering is about '.$marijuana['data']['Flowering'].'. '.$marijuana['data']['Name'].' harvest in '.$marijuana['data']['Harvest'])
@section('dctitle','Marijuana Stain '.$marijuana['data']['Name'].' What is '.$marijuana['data']['Name'])
@section('content')
 <!-- ****** Breadcumb Area Start ****** -->
 <div class="breadcumb-area" style="background-image: url(/img/bg-img/mj.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>{{$marijuana['data']['Name']}}</h2>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="breadcumb-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Marijuana {{$marijuana['data']['Name']}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
</div>
<!-- ****** Breadcumb Area End ****** -->
<!-- ****** Single Blog Area Start ****** -->
<section class="single_blog_area section_padding_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row no-gutters">

                        <!-- Single Post Share Info -->
                        <div class="col-2 col-sm-1">
                            <div class="single-post-share-info mt-100">
                                <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="googleplus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-10 col-sm-11">
                            <div class="single-post">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="/marijuana/images/{{$marijuana['name']}}.jpg" alt="{{$marijuana['name']}}">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
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
                                    <h1>Marijuana Name : {{$marijuana['data']['Name']}}</h1> 
                                    <h4>Type : {{$marijuana['data']['Type']}}</h4> 
                                    <h4>{{$marijuana['data']['Info']}}</h4> 
                                    <h4>Origins : {{$marijuana['data']['Origins']}}</h4> 
                                    <h4>Genetics : {{$marijuana['data']['Genetics']}}</h4> 
                                    <h4>Flowering : {{$marijuana['data']['Flowering']}}</h4> 
                                    <h4>Harvest : {{$marijuana['data']['Harvest']}}</h4> 
                                    <h4>Potency : {{$marijuana['data']['Potency']}}</h4> 
                                    <blockquote class="yummy-blockquote mt-30 mb-30">
                                        <h5 class="mb-30">“The Hardest Choices Require the Strongest Wills”</h5>
                                        <h6 class="text-muted">Thanos</h6>
                                    </blockquote>
                                    @foreach($marijuana['data']['Contents'] as $content)
                                        <p>{{$content}}</p>
                                    @endforeach
                
                                </div>
                            </div>

                            <!-- Tags Area -->
                            <div class="tags-area">
                                <a href="#">{{$marijuana['data']['Name']}}</a>
                                <a href="#">{{$marijuana['data']['Type']}}</a>
                                <a href="#">{{$marijuana['data']['Info']}}</a>
                            </div>

                            @component('components.related',['relatedhuas' => $relatedhuas])@endcomponent

                            <div class="related-post-area">
                                <img src="/img/ad-img/sbbanner.jpg"> 
                            </div>

                        </div>
                    </div>
                </div>

                @component('components.sidebar')@endcomponent

            </div>
        </div>
</section>
<!-- ****** Single Blog Area End ****** -->

@endsection