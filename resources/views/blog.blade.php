@extends('layouts.app')
@section('content')
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(assets/images/main-slider/images2.jpg);">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">Blog</h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="/">Acceuil</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <!-- left part start -->
                        <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                            <!-- blog grid -->
                            <div id="masonry" class="dlab-blog-grid-3 row">
                                @for ($i=0; $i<8; $i++)
                                <div class="post card-container col-lg-4 col-md-12 col-sm-12">
                                    <div class="blog-post blog-grid blog-rounded blog-effect1">
                                        <div class="dlab-post-media dlab-img-effect">
                                            <a href="blog-single.html"><img src="assets/images/main-slider/images2.jpg" alt=""></a>
                                        </div>
                                        <div class="dlab-info p-a20 border-1">
                                            <div class="dlab-post-meta">
                                                <ul>
                                                    <li class="post-date"> <strong>10 Aug</strong> <span> 2024</span> </li>
                                                    <li class="post-author"> By <a href="javascript:void(0);">Jack</a> </li>
                                                </ul>
                                            </div>
                                            <div class="dlab-post-title">
                                                <h4 class="post-title"><a href="blog-single.html">Seven Doubts You Should</a></h4>
                                            </div>
                                            <div class="dlab-post-text">
                                               <p>All the Lorem Ipsum generators on the Internet tend to repeat.</p>
                                            </div>
                                            <div class="dlab-post-readmore">
                                                <a href="/blog-detail" title="LIRE PLUS" rel="bookmark" class="site-button">LIRE PLUS
                                                    <i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>
                            <!-- blog grid END -->
                            <!-- Pagination -->
                            <div class="pagination-bx clearfix col-md-12 m-b30 text-center">
                                <ul class="pagination">
                                    <li class="previous"><a href="javascript:void(0);"><i class="ti-arrow-left"></i> Prev</a></li>
                                    <li class="active"><a href="javascript:void(0);">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li><a href="javascript:void(0);">3</a></li>
                                    <li class="next"><a href="javascript:void(0);">Next <i class="ti-arrow-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- Pagination END -->
                        </div>
                        @include('layouts.sidebarblog')
                    </div>
                </div>
            </div>
        </div>
        <!-- Left & right section END -->
        <!-- Content END-->
@endsection
