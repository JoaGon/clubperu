<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>ClubPeru</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/akslider.css">

    <link rel="stylesheet" type="text/css" href="css/theme.css">


    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('/js/smoothscroll.js') }}"></script>
    <script src="{{ url('js/angular.min.js')}}"></script>
    <script src="{{ url('js/angular/home.js')}}"></script>
</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">


        <div class="tm-menu-box">

            <div style="height: 70px;" class="uk-sticky-placeholder">
                <div class="uk-sticky-placeholder" style="height: 70px; margin: 0px;">
                <nav style="position: fixed; top: 0px; width: 100%;" class="tm-navbar uk-navbar uk-active" data-uk-sticky="">
                    <div class="uk-container uk-container-center">
                        <a class="tm-logo uk-float-left otro-logo" href="index.html">
                            <img src="img/landing/logo.jpg" alt="logo" title="logo">
                        </a>

                        <ul class="uk-navbar-nav uk-hidden-small">
                            <li class="uk-parent uk-active" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="index.html">Inicio</a>
                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                    <div class="uk-grid uk-dropdown-grid">
                                        <div class="uk-width-1-1">
                                            <ul class="uk-nav uk-nav-navbar">
                                                <li><a class="yellow-scheme" href="../yellow/index.html">Yellow Color Scheme</a>
                                                </li>
                                                <li><a class="blue-scheme" href="../blue/index.html">Blue Color Scheme</a>
                                                </li>
                                                <li><a class="red-scheme" href="../red/index.html">Red Color Scheme</a>
                                                </li>
                                                <li><a href="offline.html">Offline Page</a>
                                                </li>
                                                <li><a href="404.html">Error Page</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false" class=""><a href="about.html">Quienes somos?</a></li>
                            <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="#">Deportes</a>
                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                    <div class="uk-grid uk-dropdown-grid">
                                        <div class="uk-width-1-1">
                                            <ul class="uk-nav uk-nav-navbar">
                                                <li><a href="players.html">Players</a>
                                                </li>
                                                <li><a href="gallery.html">Gallery</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="match-list.html">Eventos</a>
                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                    <div class="uk-grid uk-dropdown-grid">
                                        <div class="uk-width-1-1">
                                            <ul class="uk-nav uk-nav-navbar">
                                                <li><a href="results.html">Results</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="news.html">Festivales</a>
                            </li>
                           
                            <li><a href="contact.html">DXN</a>
                            </li>
                        </ul>
                        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                    </div>
                </nav></div>
            </div>

        </div>

     <div  ng-app="Home" ng-controller="HomeController" class="tm-top-a-box tm-full-width  ">
                <section id="slider" style="height: 600px;" >

                    <div class="container" style="height: 600px; width: 100%; padding: 0;">
                        <div id="carousel-example-generic" style="height: 100%" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators"></ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" style="height: 600px"></div>
                        
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                        </div>
                    </div>  
                </section>
        </div>



<section id="desc" name="desc"></section>

<div class="tm-top-g-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-g" class="tm-top-g uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">

                            <div class="gallery-title">
                                <div class="uk-container uk-container-center tt-gallery-top-main">
                                    <div class="uk-grid" data-uk-grid-match="">
                                        <div class="uk-width-3-10 title" style="min-height: 121px;"><span>DEPORTES</span></div>
                                        <div class="uk-width-7-10 text" style="min-height: 121px;">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. </div>
                                    </div>
                                </div>
                            </div>
                           

                            <div id="boundary">

                                <div class="uk-grid uk-grid-collapse grid" data-uk-grid-match="" style="position: relative; height: 600px;">


                                     <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c71a18083d9e74b4a5c5d8d9a17d68d0 " style="position: absolute; left: 0%; top: 0px; min-height: 300px;">
                                        <div class="gallery-album">
                                            <a href="img/deportes/baloncesto.jpg" data-uk-lightbox="{group:'my-group3'}" class="img-0">
                                                <img src="img/deportes/baloncesto.jpg" alt="">
                                            </a>
                                            <a href="" data-uk-lightbox="{group:'my-group3'}" class="img-1">
                                                <img src="img/deportes/baloncesto.jpg" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title"></div>
                                                <div class="sub-title">Basketball </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c71a18083d9e74b4a5c5d8d9a17d68d0 " style="position: absolute; left: 24.9614%; top: 0px; min-height: 300px;">
                                        <div class="gallery-album">
                                            <a href="" data-uk-lightbox="{group:'my-group4'}" class="img-0">
                                                <img src="img/deportes/handball.jpg" alt="">
                                            </a>
                                            <a href="img/deportes/handball.jpg" data-uk-lightbox="{group:'my-group4'}" class="img-1">
                                                <img src="img/deportes/handball.jpg" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title"></div>
                                                <div class="sub-title">Handbal </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_449a5f6d01d5f416810d04b4df596b6a tt_c71a18083d9e74b4a5c5d8d9a17d68d0 tt_ea9d8d12fefde9e2f9c4631a76504ce7 " style="position: absolute; left: 50%; top: 0px; min-height: 300px;">
                                        <div class="gallery-album">
                                            <a href="img/deportes/futbol.jpg" data-uk-lightbox="{group:'my-group5'}" class="img-0">
                                                <img src="img/deportes/futbol.jpg" alt="">
                                            </a>
                                            <a href="img/deportes/futbol.jpg" data-uk-lightbox="{group:'my-group5'}" class="img-1">
                                                <img src="img/deportes/futbol.jpg" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title"></div>
                                                <div class="sub-title">Futbol</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c26e2589e25045ad516b5bc37d18523a " style="position: absolute; left: 74.9614%; top: 0px; min-height: 300px;">
                                        <div class="gallery-album">
                                            <a href="img/deportes/voleibol.jpg" data-uk-lightbox="{group:'my-group6'}" class="img-0">
                                                <img src="img/deportes/voleibol.jpg" alt="">
                                            </a>
                                            <a href="img/deportes/voleibol.jpg" data-uk-lightbox="{group:'my-group6'}" class="img-1">
                                                <img src="img/deportes/voleibol.jpg" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title"></div>
                                                <div class="sub-title">Voleibol</div>
                                            </div>
                                        </div>
                                    </div>

                                   

                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c71a18083d9e74b4a5c5d8d9a17d68d0 " style="position: absolute; left: 0%; top: 300px; min-height: 300px;">
                                        <div class="gallery-album">
                                            <a href="img/deportes/sala.jpg" data-uk-lightbox="{group:'my-group3'}" class="img-0">
                                                <img src="img/deportes/sala.jpg" alt="">
                                            </a>
                                            <a href="img/deportes/sala.jpg" data-uk-lightbox="{group:'my-group3'}" class="img-1">
                                                <img src="img/deportes/sala.jpg" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title"></div>
                                                <div class="sub-title">Futbol Sala</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c71a18083d9e74b4a5c5d8d9a17d68d0 " style="position: absolute; left: 24.9614%; top: 300px; min-height: 300px;">
                                        <div class="gallery-album">
                                            <a href="img/deportes/kung-fu.jpg" data-uk-lightbox="{group:'my-group4'}" class="img-0">
                                                <img src="img/deportes/kung-fu.jpg" alt="">
                                            </a>
                                            <a href="img/deportes/kung-fu.jpg" data-uk-lightbox="{group:'my-group4'}" class="img-1">
                                                <img src="img/deportes/kung-fu.jpg" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title"></div>
                                                <div class="sub-title">Kung Fu</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_449a5f6d01d5f416810d04b4df596b6a tt_c71a18083d9e74b4a5c5d8d9a17d68d0 tt_ea9d8d12fefde9e2f9c4631a76504ce7 " style="position: absolute; left: 50%; top: 300px; min-height: 300px;">
                                        <div class="gallery-album">
                                            <a href="img/deportes/ju.jpg" data-uk-lightbox="{group:'my-group5'}" class="img-0">
                                                <img src="img/deportes/ju.jpg" alt="">
                                            </a>
                                            <a href="img/deportes/ju.jpg" data-uk-lightbox="{group:'my-group5'}" class="img-1">
                                                <img src="img/deportes/ju.jpg" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title"></div>
                                                <div class="sub-title">Jiu Jitsu</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="uk-width-1-1 uk-width-medium-1-2 uk-width-large-1-4 grid-item tt_c26e2589e25045ad516b5bc37d18523a " style="position: absolute; left: 74.9614%; top: 300px; min-height: 300px;">
                                        <div class="gallery-album">
                                            <a href="img/deportes/ajedrez.jpg" data-uk-lightbox="{group:'my-group6'}" class="img-0">
                                                <img src="img/deportes/ajedrez.jpg" alt="">
                                            </a>
                                            <a href="img/deportes/ajedrez.jpg" data-uk-lightbox="{group:'my-group6'}" class="img-1">
                                                <img src="img/deportes/ajedrez.jpg" alt="">
                                            </a>
                                            <div class="titles">
                                                <div class="title"></div>
                                                <div class="sub-title">Ajedrez</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>

<div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="our-team-main-wrap">
                                <div class="uk-container uk-container-center">
                                    <div class="uk-grid" data-uk-grid-match="">
                                        <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                            <div class="our-team-wrap">
                                                <div class="our-team-title">
                                                    <h3>Nuestros <span>Aliados</span></h3>
                                                </div>
                                                <div class="our-team-text">
                                                    <p>Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat.</p>
                                                </div>
                                                <div class="our-team-text additional">
                                                    <p>Cras convallis feugiat felis eget venenatis. Sed leo tellus, luctus eget ante quis, rutrum dignissim enim. Morbi efficitur tellus non mauris tincidunt feugiat. Vestibulum quis nunc in nibh eleifend convallis. Vestibulum nec viverra dui. Suspendisse vel neque eros. Donec tincidunt tempus massa sed vehicula. Integer ullamcorper at elit eu commodo.</p>
                                                </div>
                                                <div class="team-read-wrap"><a class="team-read-more" href="#">Mas informacion</a>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_81747b4426a9882884c1f83eda78844f" style="min-height: 398px; margin-left: 25%;">
                                            <div class="player-article">
                                                <div class="wrapper">
                                                    <div class="img-wrap">
                                                        <div class="player-number">
                                                            <span>35</span>
                                                        </div>
                                                        <div class="bio"><span><a href="player.html">bio</a></span>
                                                        </div>
                                                        <a href="player.html">
                                                            <img src="img/landing/dxn.jpg" class="img-polaroid" alt="Johnny Thompson" title="Johnny Thompson">
                                                        </a>
                                                        <ul class="socials">
                                                            <li class="twitter">
                                                                <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="facebook">
                                                                <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="google-plus">
                                                                <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="pinterest">
                                                                <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="linkedin">
                                                                <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="info">
                                                        <div class="name">
                                                            <h3><a href="player.html">DXN</a></h3>
                                                        </div>
                                                        <div class="position"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class=" uk-width-large-1-4 uk-width-medium-1-3 uk-width-small-1-2 player-item tt_2a195f12da9f3f36da06e6097be7e451" style="min-height: 398px;">
                                            <div class="player-article">
                                                <div class="wrapper">
                                                    <div class="img-wrap">
                                                        <div class="player-number"><span>07</span>
                                                        </div>
                                                        <div class="bio"><span><a href="player.html">bio</a></span>
                                                        </div>
                                                        <a href="player.html">
                                                            <img src="img/landing/pp.jpg" class="img-polaroid" alt="Benjamin Mendoza" title="Benjamin Mendoza">
                                                        </a>
                                                        <ul class="socials">
                                                            <li class="twitter">
                                                                <a href="http://twitter.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="facebook">
                                                                <a href="http://facebook.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="google-plus">
                                                                <a href="https://plus.google.com/" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="pinterest">
                                                                <a href="https://www.pinterest.com" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                            <li class="linkedin">
                                                                <a href="https://www.linkedin.com" target="_blank" rel="nofollow">
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="info">
                                                        <div class="name">
                                                            <h3>
                                                                <a href="player.html">Publi Ideas</a>
                                                            </h3>
                                                        </div>
                                                        <div class="position"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="our-team-btn"><a href="players.html"><span>Mas informacion</span></a>
                                </div>
                            </div>

                        </div>
                    </div>


<section id="contact" name="contact"></section>
<div class="tm-bottom-e-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-e" class="tm-bottom-e uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="map-wrap">

                                <div class="contact-form-wrap uk-flex">
                                    <div class="uk-container uk-container-center uk-flex-item-1">
                                        <div class="uk-grid  uk-grid-collapse uk-flex-item-1 uk-height-1-1 uk-nbfc">
                                            <div class="uk-width-5-10 contact-left uk-vertical-align contact-left-wrap">
                                                <div class="contact-info-lines uk-vertical-align-middle">
                                                    <div class="item phone"><span class="icon"><i class="uk-icon-phone"></i></span>(846)-356-9322</div>
                                                    <div class="item mail"><span class="icon"><i class="uk-icon-envelope"></i></span><a href="mailto:support@torbara.com">support@torbara.com</a>
                                                        
                                                    </div>
                                                    <div class="item location"><span class="icon"><i class="uk-icon-map-marker"></i></span>9478 Chestnut Street, Woodstock, GA 30188</div>
                                                </div>
                                            </div>
                                            <div class="uk-width-medium-5-10 uk-width-small-1-1 contact-right-wrap">
                                                <div class="contact-form uk-height-1-1">
                                                    <div class="uk-position-cover uk-flex uk-flex-column uk-flex-center">
                                                        <div class="contact-form-title">
                                                            <h2>Contactanos</h2>
                                                        </div>
                                                        <div id="aiContactSafe_form_1">
                                                            <div class="aiContactSafe" id="aiContactSafe_mainbody_1">
                                                                <div class="contentpaneopen">
                                                                    <div id="aiContactSafeForm">
                                                                        <form id="form-contact" action="{{ url('/sendEmail')}}" method="post" enctype="plain" name="adminForm_1">
                                                                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                                                           
                                                                            <div id="displayAiContactSafeForm_1">
                                                                                <div class="aiContactSafe" id="aiContactSafe_contact_form">
                                                                                    <div class="aiContactSafe" id="aiContactSafe_info"></div>
                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_name">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_name"><label for="aics_name">Nombre</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <input name="name" id="aics_name" class="textbox" placeholder="Name" value="" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_email">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_email"><label for="aics_email">E-mail</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <input name="email" id="aics_email" class="email" placeholder="Email" value="" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_message">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_message"><label for="aics_message">Mensaje</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <textarea name="message" id="aics_message" cols="40" rows="10" placeholder="Message"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <br>
                                                                            <div id="aiContactSafeBtns">
                                                                                <div id="aiContactSafeButtons_center" style="clear:both; display:block; text-align:center;">
                                                                                    <table style="margin-left:auto; margin-right:auto;">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div id="aiContactSafeSend_loading_1">&nbsp;</div>
                                                                                                </td>
                                                                                                <td id="td_aiContactSafeSendButton">
                                                                                                    <input id="aiContactSafeSendButton" value="Send" type="submit">
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>
                                       
                            <div id="map" style="position: relative; overflow: hidden;">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>




<div id="c">
    <div class="container">
    <div class="bottom-wrapper">
            <div class="tm-bottom-f-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-f" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                        <div class="uk-width-1-1 uk-row-first">
                            <div class="uk-panel">
                                <div class="footer-logo">
                                    <a href="/"><img src="images/footer-logo-img.png" alt=""><span>Club</span>peru</a>
                                </div>
                                <div class="footer-socials">
                                    <div class="social-top">
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                    </div>
                                </div>
                                <div class="clear"></div>

                                <p class="footer-about-text">
                                    Cras convallis feugiat felis eget venenatis. Sed leo tellus, luctus eget ante quis, rutrum dignissim enim. Morbi efficitur tellus non mauris tincidunt feugiat. Vestibulum quis nunc in nibh eleifend convallis. Vestibulum nec viverra dui. Suspendisse vel neque eros. Donec tincidunt tempus massa sed vehicula. Integer ullamcorper at elit eu commodo.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

           
            <footer id="tm-footer" class="tm-footer">


                <div class="uk-panel">
                    <div class="uk-container uk-container-center">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="footer-wrap">
                                    <div class="foot-menu-wrap">
                                        <ul class="nav menu">
                                            <li class="item-165"><a href="about.html">Quienes Somos</a>
                                            </li>
                                            <li class="item-166"><a href="players.html">Deportes</a>
                                            </li>
                                            <li class="item-167"><a href="match-list.html">Eventos</a>
                                            </li>
                                          
                                            <li class="item-169"><a href="news.html">DXN</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="copyrights">Copyright © 2018. Todos los derechos reservados</div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
      

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/uikit.js"></script>
<script type="text/javascript" src="js/components/grid.js"></script>
<script type="text/javascript" src="js/components/slider.js"></script>
<script type="text/javascript" src="js/components/slideshow.js"></script>
<script type="text/javascript" src="js/components/slideset.js"></script>
<script type="text/javascript" src="js/components/lightbox.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaq6wF94uXOdblFHAGtA_fksdRXg1-Es4"> </script>
  <script>
                                    window.map = false;
                                    window.marker   = false;
                                    window.infowindow   = false;             
                                    
                                                            
                                    function initialize(){
                                        var myLatlng = new google.maps.LatLng(-12.1248284,-77.0291482);
                                    
                                        var mapOptions = {
                                            zoom:16,
                                            center: myLatlng,
                                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                                            scrollwheel: false,

                                            streetViewControl:false,
                                            overviewMapControl:false,
                                            mapTypeControl:false    
                                            
                                        };
                                        
                                    window.map = new google.maps.Map(document.getElementById('map'), mapOptions); 
                                    window.marker = new google.maps.Marker({
                                      position: myLatlng,
                                      map:  window.map,
                                       title: 'Oficina ClubPeru'
                                    }); 
                                                     
                                    }
                                   
                                
                                    google.maps.event.addDomListener(window, 'load', initialize);
                                </script>   
</body>

</html>
