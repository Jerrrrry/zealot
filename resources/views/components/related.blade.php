<!-- Related Post Area -->
<div class="related-post-area section_padding_50">
                                <h4 class="mb-30">Related Marijuana Strains</h4>

                                <div class="related-post-slider owl-carousel">
                                    @foreach($related-huas as $hua)
                                        <!-- Single Related Post-->
                                        <div class="single-post">
                                            <!-- Post Thumb -->
                                            <div class="post-thumb">
                                                <img src="/marijuana/images/{{$hua['name']}}.jpg" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <div class="post-meta d-flex">
                                                    <div class="post-author-date-area d-flex">
                                                        <!-- Post Author -->
                                                        <div class="post-author">
                                                            {{$hua['data']['Type']}}
                                                        </div>
                                                        <!-- Post Date -->
                                                        <div class="post-date">
                                                            {{$hua['data']['Info']}}
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="/marijuana-data/{{$hua['name']}}">
                                                    <h6>{{$hua['data']['Name']}}</h6>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>