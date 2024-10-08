@extends('layouts.app')
@section('content')
<div class="page-content bg-white">
    <!-- Slider -->
    <div class="main-slider style-two default-banner" id="home">
       <div id="rev_slider_1061_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="creative-freedom" data-source="gallery" style="background-color:#1f1d24;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
            <div id="rev_slider_1061_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    @php
                        $array=['','Bienvenu </br>chez KANYCHRISTIAN', 'Obtenez n\'importe</br> quel livre chez nous', 'Telecharger des </br>livres chez nous en pdf']
                    @endphp
                    @for ($i=1; $i<4;$i++)
                        <li data-index="rs-{{ $i }}00"
                        data-transition="fadethroughdark"
                        data-slotamount="default"
                        data-hideafterloop="0"
                        data-hideslideonmobile="off"
                        data-easein="default"
                        data-easeout="default"
                        data-masterspeed="2000"
                        data-thumb="assets/images/main-slider/images{{ $i-1 }}.jpg"
                        data-rotate="0"
                        data-saveperformance="off"
                        data-title="Creative"
                        data-param1="01"
                        data-param2="" data-param3=""
                        data-param4=""
                        data-param5=""
                        data-param6=""
                        data-param7=""
                        data-param8=""
                        data-param9=""
                        data-param10=""
                        data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="assets/images/main-slider/images{{ $i-1 }}.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="3" class="rev-slidebg" 	data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper rs-parallaxlevel-tobggroup"
                            id="slide-{{ $i }}00-layer-1"
                            data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']"
                            data-voffset="['0','0','0','0']"
                            data-fontweight="['100','100','400','400']"
                            data-width="full"
                            data-height="full"
                            data-whitespace="nowrap"
                            data-type="shape"
                            data-basealign="slide"
                            data-responsive_offset="off"
                            data-responsive="off"
                            data-frames='[{"from":"opacity:0;","speed":1500,"to":"o:1;","delay":150,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power2.easeInOut"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; background-color:rgba(18, 12, 20, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-shape tp-shapewrapper bg-primary rs-parallaxlevel-3"
                            id="slide-{{ $i }}00-layer-2"
                            data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']"
                            data-voffset="['-150','-178','-120','-141']"
                            data-width="5"
                            data-height="100"
                            data-whitespace="nowrap"
                            data-type="shape"
                            data-responsive_offset="on"
                            data-responsive="off"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            style="z-index: 6;border-color:rgba(0, 0, 0, 0);border-width:0px;">
                        </div>
                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption Creative-SubTitle tp-resizeme rs-parallaxlevel-2 text-primary"
                            id="slide-{{ $i }}00-layer-3"
                            data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']"
                            data-voffset="['-60','-91','-20','-30']"
                            data-fontsize="['14','14','14','14']"
                            data-lineheight="['14','14','14','14']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2350,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            style="z-index: 7; white-space: nowrap; font-family: 'Roboto Condensed', sans-serif;">
                            <span class="fs-4 fw-bolder">
                                Lisez nos livres de partout sans soucis
                            </span>
                        </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption Creative-Title tp-resizeme rs-parallaxlevel-1"
                            id="slide-{{ $i }}00-layer-4"
                            data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']"
                            data-voffset="['40','-10','60','40']"
                            data-fontsize="['70','70','50','40']"
                            data-lineheight="['70','70','55','45']"
                            data-width="['none','none','none','320']"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":2550,"ease":"Power3.easeOut"},{"delay":"wait","speed":1000,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            style="z-index: 8; white-space: nowrap; font-family: 'Roboto Condensed', sans-serif;">
                            {!! $array[$i] !!}
                        </div>
                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-shape tp-shapewrapper bg-primary rs-parallaxlevel-3"
                            id="slide-{{ $i }}00-layer-5"
                            data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['middle','middle','middle','middle']"
                            data-voffset="['200','137','210','180']"
                            data-width="5"
                            data-height="100"
                            data-whitespace="nowrap"
                            data-type="shape"
                            data-responsive_offset="on"
                            data-responsive="off"
                            data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2900,"ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"to":"y:[-100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power1.easeIn"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            style="z-index: 9; border-color:rgba(0, 0, 0, 0);border-width:0px;">
                        </div>
                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption Creative-Button rev-btn text-primary rs-parallaxlevel-15"
                            id="slide-{{ $i }}00-layer-6"
                            data-x="['center','center','center','center']"
                            data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']"
                            data-voffset="['720','611','800','650']"
                            data-fontweight="['400','500','500','500']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="button"
                            data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                            data-responsive_offset="on"
                            data-responsive="off"
                            data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":3850,"ease":"Power2.easeOut"},{"delay":"wait","speed":500,"to":"x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0.75;sY:0.75;skX:0;skY:0;opacity:0;","ease":"Power1.easeIn"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:#e87800;bc:#e87800;bw:1px 1px 1px 1px;"}]'
                            data-textAlign="['left','left','left','left']"
                            data-paddingtop="[15,15,15,15]"
                            data-paddingright="[50,50,50,30]"
                            data-paddingbottom="[15,15,15,15]"
                            data-paddingleft="[50,50,50,30]"
                            style="z-index: 10; white-space: nowrap; outline:none; box-shadow:none; box-sizing:border-box; -moz-box-sizing:border-box; -webkit-box-sizing:border-box; cursor:pointer;font-family: 'Roboto Condensed', sans-serif; border-color: var(--color-primary);"><a href="/books" class="fw-bolder h5">VOIR PLUS DE LIVRES</a>
                        </div>
                    </li>


                    @endfor
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->
    </div>
    <!-- Slider END -->
    <!-- contact area -->
    <div class="content-block">
        {{-- About autor --}}
        <div class="section-full p-0 m-0" id="apropos">
            <div class="row m-0 p-0">
                <div class="col-xl-6 col-lg-12 p-lr0 d-flex dis-tbsl latest-project-info p-3 bg-primary wow fadeInLeft " data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="text-white ">
                        <h3 >A propos de <span class="text-dark fw-bolder">KANY</span><span class="fw-bolder">CHRISTIAN</span></h3>
                        <p class="fw-semibold fs-6 fs-lg-4 text-justify">
                            Écrivain, penseur, ingénieur et prédicateur de l'évangile, Christian Kany est un homme
                            aux multiples facettes, dont l'engagement pour la jeunesse africaine ne cesse
                            d'inspirer. Son parcours, riche d'expériences et de connaissances, se traduit par
                            une œuvre littéraire profonde, une réflexion aiguisée sur les enjeux de son temps,
                            et une action concrète auprès des jeunes générations.
                        </p>
                        <h4>Un esprit éclairé</h4>
                        <p class="fw-semibold fs-6 fs-lg-4 text-justify">
                            La plume de Christian Kany est guidée par une quête insatiable de vérité et de sens.
                            Ses écrits, empreints de sagesse et d'humanité, explorent les profondeurs de l'âme
                            humaine et invitent à une réflexion critique sur le monde qui nous entoure. En tant
                            que penseur, il aborde des sujets d'actualité avec une acuité et une perspicacité
                            rares, offrant des analyses éclairées et des solutions constructives.
                        </p>
                        <h4>Un ingénieur au service du progrès</h4>
                        <p class="fw-semibold fs-6 fs-lg-4 text-justify">
                            Son esprit scientifique lui permet d'appréhender le monde avec rigueur et précision.
                            Ingénieur de formation, Christian Kany met ses compétences au service du progrès et
                            du développement. Son engagement dans ce domaine se traduit par des réalisations
                            concrètes qui contribuent à améliorer la vie des populations africaines.
                        </p>
                        <h4>Un prédicateur de l'évangile porteur d'espoir</h4>
                        <p class="fw-semibold fs-6 fs-lg-4  text-justify">
                            Homme de foi profonde, Christian Kany trouve dans l'évangile une source d'inspiration
                            et de réconfort. Sa prédication, empreinte de compassion et d'authenticité, touche
                            les cœurs et offre un message d'espoir aux jeunes générations.
                        </p>
                        <a href="/blog" class="site-button btnhover13 white">Voir nos projets</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 p-lr0 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s" >
                    <div class="dlab-box overlay-gallery-bx1 lightgallery">
                        <div class="dlab-thum dlab-img-overlay6 primary">
                            <a href="javascript:void(0);"> <img class="img-cover" src="assets/images/main-slider/images0.jpg"  alt=""> </a>
                            <div class="overlay-bx">
                                <div class="overlay-icon">
                                    <a href="javascript:void(0);"> <i class="fas fa-play icon-bx-xs"></i> </a>
                                    <span data-exthumbimage="assets/images/main-slider/images0.jpg" data-src="assets/images/main-slider/images0.jpg" class="check-km" title="Linux99 Viewer Panel">
                                    <i class="fas fa-search icon-bx-xs"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-full content-inner bg-gray" id="books">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title">QUELQUES LIVRES</h2>
                    <p>Une liste de nos meilleurs livres</p>
                </div>
                <div class="row">
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

                        <a class="d-block dlab-info"onclick="addingDonwloadBook($book->id)" href="{{ $book->file }}" >
                            <h4 class="bg-primary rounded p-1 d-flex justify-content-between align-items-center">
                                <a  onclick="addingDonwloadBook($book->id)" href="{{ $book->file }}"  class="p-2 text-white">
                                    {{ $book->title }}
                                </a>
                                <a href="{{ $book->file }}" onclick="addingDonwloadBook($book->id)" class="text-white">
                                    <i class="fa fa-download me-2"></i>
                                </a>
                            </h4>
                        </a>
                    </div>
                </div>
                   @endforeach
                </div>
            </div>
        </div>
        <!-- About Us End -->
        <!-- Latests News -->
        <div class="section-full content-inner bg-white d-none" id="blogs">
            <div class="container">
                <div class="section-head text-black text-center">
                    <h2 class="title">DERNIERE NOUVELLE</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="blog-carousel owl-carousel owl-btn-3 owl-btn-center-lr">
                   @for ($i=0; $i<5;$i++)
                   <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                    <div class="blog-post blog-grid blog-rounded blog-effect1">
                        <div class="dlab-post-media dlab-img-effect "> <a href="javascript:void(0);"><img src="assets/images/main-slider/images3.jpg" alt=""></a> </div>
                        <div class="dlab-info p-a20 border-1">
                            <div class="dlab-post-meta">
                                <ul>
                                    <li class="post-date"> <strong>10 Aug</strong> <span> 2024</span> </li>
                                    <li class="post-author"> By <a href="javascript:void(0);">Daniel</a> </li>
                                </ul>
                            </div>
                            <div class="dlab-post-title">
                                <h4 class="post-title"><a href="/">Le savoir de Geants</a></h4>
                            </div>
                            <div class="dlab-post-text">
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true.</p>
                            </div>
                            <div class="dlab-post-readmore">
                                <a href="/blog-detail" title="LIRE PLUS" rel="bookmark" class="site-button btnhover13">LIRE PLUS</a>
                            </div>
                        </div>
                    </div>
                </div>
                   @endfor
                </div>
            </div>
        </div>
        <!-- Latest News End -->
        <!-- Counter -->
        <div class="section-full content-inner overlay-black-dark bg-img-fix" style="background-image: url(images/background/bg17.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="counter-style-1 text-center text-white">
                            <div class="">
                                <span class="counter">{{ $visitors }}</span>
                            </div>
                            <span class="counter-text">Visiteurs</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="counter-style-1 text-center text-white">
                            <div class="">
                                <span class="counter">
                                    {{ $books->count() }}
                                </span>
                            </div>
                            <span class="counter-text">des livres</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="counter-style-1 text-center text-white">
                            <div class="">
                                <span class="counter">3569</span>
                            </div>
                            <span class="counter-text">Telechargement</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.3s">
                        <div class="counter-style-1 text-center text-white">
                            <div class="">
                                <span class="counter">2089</span>
                            </div>
                            <span class="counter-text">De feedback</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Counter End -->
        <!-- Call To Action -->
        <div class="section-full call-action bg-primary wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 text-white">
                        <h2 class="title">
                            Contactez-nous pour poster ici votre livre
                        </h2>
                        <p class="m-b0">
                            Nous sommes prets a appuyer les jeunes ecrivains en leurs permettant de publier ici leur contenu tout en respectant le droit
                            d'auteur.
                        </p>
                    </div>
                    <div class="col-lg-3 d-flex">
                        <a href="/contact" class="site-button btnhover13 white align-self-center outline ms-auto outline-2">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action End -->
    </div>
    <!-- contact area END -->
</div>
@endsection
