@if(is_array(Cache::get('top-huas')) || is_object(Cache::get('top-huas')))
@foreach (Cache::get('top-huas') as $hua)
<!-- Single Popular Post -->
<div class="single-populer-post d-flex">
        <img src="/marijuana/images/{{$hua['name']}}.jpg" alt="{{$hua['name']}}">

    <div class="post-content">
        <a href="/marijuana-strains/{{$hua['name']}}">
            <h6>{{$hua['data']['Name']}}</h6>
        </a>
        <p>{{$hua['data']['Type']}}</p>
        <p>{{$hua['data']['Info']}}</p>
    </div>
</div>
@endforeach
@endif