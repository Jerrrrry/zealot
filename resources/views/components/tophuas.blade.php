@foreach (Cache::get('top-huas') as $hua)
<!-- Single Popular Post -->
<div class="single-populer-post d-flex">
    <a href="/marijuana-data/{{$hua['name']}}">
        <img src="/marijuana/images/{{$hua['name']}}.jpg" alt="">
    </a>
    <div class="post-content">
        <a href="/marijuana-data/{{$hua['name']}}">
            <h6>{{$hua['data']['Name']}}</h6>
        </a>
        <p>{{$hua['data']['Type']}}</p>
        <p>{{$hua['data']['Info']}}</p>
        <p>{{$hua['data']['Origins']}}</p>
    </div>
</div>
@endforeach