<!-- Sliders -->
<section class="welcome-post-sliders owl-carousel">
    @if(is_array(Cache::get('sliders')) || is_object(Cache::get('sliders')))
        @foreach(Cache::get('sliders') as $slider)
            <!-- Single Slide -->
            <div class="welcome-single-slide">
                <!-- Post Thumb -->
                <img src="{{$slider['image']}}" alt="{{$slider['data']['title']['rendered']}}">
                <!-- Overlay Text -->
                <div class="project_title">
                    <!-- <div class="post-date-commnents d-flex">
                        <a href="#">May 19, 2017</a>
                        <a href="#">5 Comment</a>
                    </div> -->
                    <a href="/post/{{$slider['data']['slug']}}">
                        <h5>{{$slider['data']['title']['rendered']}}</h5>
                    </a>
                </div>
            </div>
        @endforeach
    @endif
    

</section>