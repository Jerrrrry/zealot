@if(is_array(Cache::get('topmjarticles')) || is_object(Cache::get('topmjarticles')))
@foreach (Cache::get('topmjarticles') as $article)
<!-- Single Popular Post -->
<div class="single-populer-post d-flex">
        <img src="{{$article['urlToImage']}}" alt="">

    <div class="post-content">
        <a href="{{$article['url']}}" target="_blank">
            <h6>{{$article['title']}}</h6>
        </a>
    </div>
</div>
@endforeach
@endif