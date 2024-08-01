@extends('layouts.app')
@section('content')
<div class="page-content bg-white">
    <!-- Contact Form -->
    <div class="section-full content-inner contact-page-9 overlay-black-dark" style="background-image: url(images/background/bg5.jpg); background-position: 30% 100%">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 text-white">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                                <div class="icon-content">
                                    <h5 class="dlab-tilte">
                                        <span class="icon-sm text-primary"><i class="fas fa-location-pin"></i></span>
                                        Adresse de notre Entreprise
                                    </h5>
                                    <p>
                                        97, Av de l'Unite, Q. Kyeshero, Commune de Goma, Ville de Goma, RD Congo
                                    </p>
                                    <h6 class="m-b15 font-weight-400"><i class="fas fa-alarm-clock"></i> Heure d'ouverture</h6>
                                    <p class="m-b0">Lundi au Sam - 10h00 - 17h00</p>
                                    <p>Dimanche - Ferme</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                                <div class="icon-content">
                                    <h5 class="dlab-tilte">
                                        <span class="icon-sm text-primary"><i class="fas fa-email"></i></span>
                                        E-mail
                                    </h5>
                                    <p class="m-b0">info@kanychristian.com</p>
                                    <p class="m-b0">contact@kanychristian.com</p>
                                    <p class="m-b0">support@kanychristian.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6 m-b30">
                            <div class="icon-bx-wraper bx-style-1 p-a20 radius-sm">
                                <div class="icon-content">
                                    <h5 class="dlab-tilte">
                                        <span class="icon-sm text-primary"><i class="fas fa-mobile"></i></span>
                                        Numero de telephone
                                    </h5>
                                    <p class="m-b0">+243 970 912428</p>
                                    <p class="m-b0">+243 970 912428</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 m-b30">
                    <form class="inquiry-form wow box-shadow bg-white fadeInUp" data-wow-delay="0.2s">
                        <h3 class="title-box font-weight-300 m-t0 m-b10">Let's Convert Your Idea into Reality <span class="bg-primary"></span></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fas fa-user text-primary"></i></span>
                                        <input name="dzName" type="text" required class="form-control" placeholder="Votre nom">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fas fa-mobile text-primary"></i></span>
                                        <input name="dzOther[Phone]" type="text" required class="form-control" placeholder="Telephone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fas fa-email text-primary"></i></span>
                                        <input name="dzEmail" type="email" class="form-control" required  placeholder="Votre addresse E-mail" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fas fa-agenda text-primary"></i></span>
                                        <textarea name="dzMessage" rows="4" class="form-control" required placeholder=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button name="submit" type="submit" value="Submit" class="site-button button-md"> <span>Get A Free Quote!</span> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form END -->
</div>
@endsection
