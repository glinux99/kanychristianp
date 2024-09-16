@extends('layouts.app')
@section('content')
        <!-- Content -->
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(assets/images/main-slider/images2.jpg);">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">Livres</h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="/">Acceuil</a></li>
                                <li>Livres</li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            <div class="content-area">
                <div class="container">
                    <!-- blog grid -->
                    <div id="masonry" class="dlab-blog-grid-3 row">
                        @foreach ($books as $book)
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b50 wow fadeInLeft " data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="dlab-box service-box-3">
                                <div class="dlab-media radius-sm dlab-img-overlay1">
                                    <a href="#"><img src="{{ $book->avatar ?? 'assets/images/default-book.webp' }}" onerror="this.src='assets/images/default-book.webp" class="h-300px" alt=""></a>
                                    <div class="dlab-info-has">
                                        <ul class="dlab-social-icon text-white text-justify">
                                           {{ $book->synopsis }}
                                        </ul>
                                    </div>
                                </div>

                                <a class="d-block dlab-info" href="{{ $book->file }}">
                                    <h4 class="bg-primary rounded p-1 d-flex justify-content-between align-items-center">
                                        <a href="{{ $book->file }}" class="p-2 text-white">
                                        {{ $book->title }}
                                    </a>
                                <a href="{{ $book->file }}" class="text-white">
                                    <i class="fa fa-download me-2"></i>
                                </a>
                                    </h4>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- blog grid END -->
                    <!-- Pagination -->
                    <div class="pagination-bx clearfix col-md-12 text-center">
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
            </div>
        </div>
        <!-- Content END-->
@endsection
