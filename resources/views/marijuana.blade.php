@extends('layout.app')

@section('content')
 <!-- ****** Breadcumb Area Start ****** -->
 <div class="breadcumb-area" style="background-image: url(img/bg-img/breadcumb.jpg);">
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
@endsection