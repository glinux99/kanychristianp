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
                        @for ($i=0; $i<5; $i++)
                        <div class="col-lg-4 col-md-6 col-sm-12 m-b50 wow fadeInLeft " data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="dlab-box service-box-3">
                                <div class="dlab-media radius-sm dlab-img-overlay1">
                                    <a href="services-details.html"><img src="assets/images/main-slider/images.jpeg" alt=""></a>
                                    <div class="dlab-info-has">
                                        <ul class="dlab-social-icon text-white text-justify">
                                            Dans le cycle arthurien, dont il est désormais indissociable, Merlin naît d'une mère humaine et d'un père diabolique. Bâtisseur de Stonehenge, il emploie ses sortilèges pour permettre la naissance du Roi Arthur et son accession au pouvoir, grâce à l'épreuve de l'épée Excalibur et à la formation de la Table ronde
                                        </ul>
                                    </div>
                                </div>
                                <a class="d-block dlab-info" href="/">
                                    <h4 class="title"><a href="">LEGEND DE MERLIN</a></h4>
                                </a>
                            </div>
                        </div>
                        @endfor
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
