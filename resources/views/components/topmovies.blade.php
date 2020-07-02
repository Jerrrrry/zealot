<!-- Single Post -->
@if(is_array(Cache::get('topmovies'))||is_object(Cache::get('topmovies')))
    @foreach(Cache::get('topmovies') as $movie)
        <div class="col-12">
            <div class="single-post wow fadeInUp" data-wow-delay=".2s">
                 <!-- Post Thumb -->
                <div class="post-thumb">
                        <img src="{{$movie['image']}}" alt="">
                </div>
                <!-- Post Content -->
                <div class="post-content">
                                        
                    <a href="#">
                        <h2 class="post-headline">{{$movie['data']['title']['rendered']}}</h2>
                    </a>
                    <a href="/movie/{{$movie['data']['slug']}}" class="read-more">Continue Watching..</a>                      
                </div>
                    
                   
            </div>
        </div>
    @endforeach
@endif