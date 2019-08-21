@foreach ($ms as $m)
<div class="col-12 col-md-6">
    <div class="single-post wow fadeInUp" data-wow-delay=".8s">
        <!-- Post Thumb -->
        <div class="post-thumb">
            <img src="/marijuana/images/{{$m['name']}}.jpg" alt="">
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
            <a href="#">
                <h4 class="post-headline">{{$m['data']['Name']}} : {{$name['data']['Info']}}</h4>
            </a>
        </div>
    </div>
</div>
@endforeach