@extends('layout.app')
@section('title', 'Cannabis Zealot, Best information collection of Marijuana')
@section('keywords', 'cannabis zealot, marijuana, marijuana strains, cannabis, cannabis strains, grow marijuana, marijuana seeds, marijuana news, marijuana laws, marijuana dispensaries')
@section('description','Collection of marijuana information like cannabis genetics, strain descriptions,latest marijuana related news, cultivation and growing help, medical marijuana research.')
@section('dctitle','Cannabis Zealot, Best information collection of Marijuana')
@section('content')

<!-- ****** Categories Area Start ****** -->
<section class="categories_area clearfix" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".3s">
                        <img src="/img/catagory-img/indica.jpg" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h5>Indica</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".6s">
                        <img src="/img/catagory-img/sativa.jpg" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h5>Sativa</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_catagory wow fadeInUp" data-wow-delay=".9s">
                        <img src="/img/catagory-img/hybrid.jpg" alt="">
                        <div class="catagory-title">
                            <a href="#">
                                <h5>Hybrid</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Categories Area End ****** -->

    <!-- ****** Blog Area Start ****** -->
    <section class="blog_area section_padding_0_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row">

                        @component('components.topmovies')@endcomponent
                        @component('components.singleposts',['ms' => $ms])@endcomponent
                        <!-- ******* List Blog Area Start ******* -->

                    </div>
                </div>

                <!-- ****** Blog Sidebar ****** -->
                @component('components.sidebar')@endcomponent
            </div>
        </div>
    </section>
    <!-- ****** Blog Area End ****** -->    
@endsection