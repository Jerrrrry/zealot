@foreach (Cache::get('top-huas') as $hua)
<!-- Single Popular Post -->
<div class="single-populer-post d-flex">
    <img src="/marijuana/images/{{$hua['name']}}.jpg" alt="">
    <div class="post-content">
        <a href="#">
            <h6>{{$hua['Name']}}</h6>
        </a>
        <p>{{$hua['Type']}}</p>
    </div>
</div>
@endforeach