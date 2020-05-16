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
                        {{!!$content!!}}

                    </div>
                </div>

                <!-- ****** Blog Sidebar ****** -->
                @component('components.sidebar')@endcomponent
            </div>
        </div>
</section>
@endsection
