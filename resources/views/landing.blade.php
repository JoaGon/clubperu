<html lang="en"><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script id="tinyhippos-injected">if (window.top.ripple) { window.top.ripple("bootstrap").inject(window, document); }</script><head>
        <title>Sport.AK — Soccer Club and Sport HTML Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8;">
        <link rel="canonical" href="#">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/preview.css">
        <link rel="stylesheet" type="text/css" href="css/preview-responsive.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/css/select2.min.css" rel="stylesheet">
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/js/select2.min.js"></script>
        <script charset="utf-8">
            
            //Automatically remove Envato iframe 
            if(top != self) {
                window.open(self.location.href, '_top');
            }
            
            //TODO: some strange value
            var min_height = 600;
            $(function () {
                resizeFrame();
            });
            function resizeFrame()
            {
                if (1 == 0)
                    return false;
                var main_iframe = $('#preview');
                var height = $(window).height() - $('#preview-bar:visible').outerHeight();
                if ($.browser.opera)
                    height += 5;
                
                if (height < min_height) {
                    height = min_height;
                }
                //$('#preview').height(height);
                $('#iframelive').height(height);

            }
            $(window).resize(function () {
                resizeFrame();
            }).load(function () {
                resizeFrame();
            });

        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                var theme = "HTML-Sport.AK";
                if (!(navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/Opera Mini/))) {
                    var frame = document.getElementById('preview');
                    $('#iframelive').removeClass().addClass('desktop');
                    $('#desktop').removeClass().addClass('active');
                    $('ul#responsivator').show();
                    $('ul#responsivator li').click(function () {
                        $('ul#responsivator li').removeClass();
                        $(this).addClass('active');
                        $('#iframelive').removeClass().addClass($(this).attr('id'));
                        
                        // Spesial mobile views for Adobe Muse themes
                        if(theme == "M-itsme"){
                            if( ($(this).attr('id')=="tablet-landscape")||($(this).attr('id')=="tablet-portrait") ) { // For Tablet
                                frame.src = "http://m-itsme.torbara.com/tablet/index.html";
                            } else if( ($(this).attr('id')=="iphone-landscape")||($(this).attr('id')=="iphone-portrait") ) { // For Phones
                                frame.src = "http://m-itsme.torbara.com/phone/index.html";
                            } else { // For others
                                frame.src = "http://h-sportak.torbara.com/yellow/"; //for reloading frame and scroll to top
                            }
                        } else if (theme == "M-mixta") {
                            if( ($(this).attr('id')=="tablet-landscape")||($(this).attr('id')=="tablet-portrait") ) { // For Tablet
                                frame.src = "http://m-mixta.torbara.com/tablet/index.html";
                            } else if( ($(this).attr('id')=="iphone-landscape")||($(this).attr('id')=="iphone-portrait") ) { // For Phones
                                frame.src = "http://m-mixta.torbara.com/phone/index.html";
                            } else { // For others
                                frame.src = "http://h-sportak.torbara.com/yellow/"; //for reloading frame and scroll to top
                            }
                        } else {
                            frame.src = frame.src; //for reloading frame and scroll to top
                        }
                    });
                } else {
                    window.location = $("#preview").attr('src');
                }
                
                $(".ak-close").click(function (e){
                    e.preventDefault();
                    window.location = $("#preview").attr('src');
                });
                
                // preset click
                $("#tt-preset-selector .preset").click(function (e){
                    $("#tt-preset-selector .preset").removeClass("selected");
                    $(this).addClass("selected");
                    $("#preview").attr('src', $(this).data("link"));
                });
                
                function formatTheme (state) {
                    if (!state.id) { return state.text; }
                    var $state = $(
                      '<span class="tt-menu-item"><img src="/demo/assets/images/icons/'+state.element.value.toLowerCase()+'.png" class="ak-tmimg" /> ' + state.text + '</span>'
                    );
                    return $state;
                };
                
                
                $eventSelect = $(".ak-theme-selector").select2({templateResult: formatTheme, minimumResultsForSearch: 10 });
                $eventSelect.on("change", function (e) {
                    window.location = "http://torbara.com/demo/?theme="+$eventSelect.val();
                });
                
//                // Image on item hover
//                $(document).on("mouseover", ".tt-menu-item", function() {
//                    console.log("mouseover");
//                });
                
                
            });

        </script>
    </head>
    <body class="tm-isblog">

    <div class="preloader" style="display: none;">
        <div class="loader"></div>
    </div>


    <div class="over-wrap">
        <div class="toolbar-wrap">
            <div class="uk-container uk-container-center">
                <div class="tm-toolbar uk-clearfix uk-hidden-small">


                    <div class="uk-float-right">
                        <div class="uk-panel">
                            <div class="social-top">
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="tm-menu-box">

            <div style="height: 70px;" class="uk-sticky-placeholder">
                <div class="uk-sticky-placeholder" style="height: 70px; margin: 0px;"><nav style="position: fixed; top: 0px; width: 1294px;" class="tm-navbar uk-navbar uk-active" data-uk-sticky="">
                    <div class="uk-container uk-container-center">
                        <a class="tm-logo uk-float-left" href="index.html">
                            <img src="images/logo-img.png" alt="logo" title="logo"> <span>Sport<em>.ak</em></span>
                        </a>

                        <ul class="uk-navbar-nav uk-hidden-small">
                            <li class="uk-parent uk-active" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="index.html">Home</a>
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
                            <li data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false" class=""><a href="about.html">About</a></li>
                            <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="#">Pages</a>
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
                            <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="match-list.html">Match</a>
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
                            <li><a href="news.html">News</a>
                            </li>
                            <li><a href="category.html">Shop</a>
                            </li>
                            <li><a href="contact.html">Contact</a>
                            </li>
                        </ul>
                        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                    </div>
                </nav></div>
            </div>

        </div>

        <div class="tm-top-a-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="akslider-module ">
                                <div class="uk-slidenav-position" data-uk-slideshow="{height: 'auto', animation: 'swipe', duration: '500', autoplay: false, autoplayInterval: '7000', videoautoplay: true, videomute: true, kenburns: false}">
                                    <ul class="uk-slideshow uk-overlay-active" style="height: 600px;">
                                        <li aria-hidden="false" class="uk-height-viewport uk-active" style="height: 600px;"><div class="uk-cover-background uk-position-cover" style="background-image: url(&quot;images/main-slider-img.jpg&quot;);"></div>
                                            <div style="background-image: url(images/main-slider-img.jpg);" class="uk-cover-background uk-position-cover"></div><img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="images/main-slider-img.jpg" alt="">
                                            <div class="uk-position-cover uk-flex-middle">
                                                <div class="uk-container uk-container-center uk-position-cover">
                                                    <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                        <h3>Life is <span>about timing</span></h3>
                                                        <div class="promo-sub">Just play. <span>Have fun.</span> Enjoy the game</div>
                                                        <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li aria-hidden="true" class="uk-height-viewport" style="height: 600px;"><div class="uk-cover-background uk-position-cover" style="background-image: url(&quot;images/main-slider-img1.jpg&quot;);"></div>
                                            <div style="background-image: url(images/main-slider-img1.jpg;);" class="uk-cover-background uk-position-cover"></div><img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="images/main-slider-img1.jpg" alt="">
                                            <div class="uk-position-cover uk-flex-middle">
                                                <div class="uk-container uk-container-center uk-position-cover">
                                                    <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                        <h3>Just play.<span>Have fun.</span></h3>
                                                        <div class="promo-sub">Life is <span>about timing</span> Enjoy the game</div>
                                                        <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li aria-hidden="true" class="uk-height-viewport" style="height: 600px;"><div class="uk-cover-background uk-position-cover" style="background-image: url(&quot;images/main-slider-img2.jpg&quot;);"></div>
                                            <div style="background-image: url(images/main-slider-img2.jpg;);" class="uk-cover-background uk-position-cover"></div><img style="width: 100%; height: auto; opacity: 0;" class="uk-invisible" src="images/main-slider-img2.jpg" alt="">
                                            <div class="uk-position-cover uk-flex-middle">
                                                <div class="uk-container uk-container-center uk-position-cover">
                                                    <div class="va-promo-text uk-width-6-10 uk-push-4-10">
                                                        <h3>Life is <span>about timing</span></h3>
                                                        <div class="promo-sub">Just play. <span>Have fun.</span> Enjoy the game</div>
                                                        <a href="#" class="read-more">Read More<i class="uk-icon-chevron-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                    <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                    <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-text-center">
                                        <li class="uk-active" data-uk-slideshow-item="0"><a href="/">0</a>
                                        </li>
                                        <li data-uk-slideshow-item="1"><a href="/">1</a>
                                        </li>
                                        <li data-uk-slideshow-item="2"><a href="/">2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>



        <div class="tm-bottom-c-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-c" class="tm-bottom-c uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="shop-main-page-wrap">
                                <div class="container uk-container-center">
                                    <div class="uk-grid">
                                        <div class="uk-width-1-1">
                                            <div class="shop-title">
                                                <h2>Fun <span>Shop</span></h2>
                                            </div>
                                        </div>
                                        <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                            <div class="shop-text">Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat. </div>
                                        </div>
                                        <div class="uk-width-1-1 uk-text-center">
                                            <div class="sale-proposal">Save <span>33% OFF</span> for all new orders</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="latest_products jshop">

                                    <div data-uk-slider="{center:true, autoplay:true, pauseOnHover:true, autoplayInterval:5000}" dir="ltr">

                                        <div class="uk-slider-container">
                                            <ul class="uk-slider uk-grid-width-large-1-6 uk-grid-width-medium-1-4 uk-grid-width-small-1-1  uk-grid uk-grid-medium" style="min-width: 4396.25px; min-height: 240px; transform: translateX(-2967.5px);">

                                                <li class="block_item uk-slide-after" style="left: 4396.25px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_Jacket31.jpg" alt="Sportswear outerwear coats">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">Sportswear outerwear coats</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$100</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$151</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a> 
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-after" style="left: 4616.06px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_Jacket31.jpg" alt="Sportswear outerwear coats">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">Sportswear outerwear coats</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$100</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$151</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a> 
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-after" style="left: 4835.88px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_jacket24.jpg" alt="Waterproof jackets">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">Waterproof jackets</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$200</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$120</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a> 
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-before" style="left: 659.438px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_jacket241.jpg" alt="Waterproof jackets">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">Waterproof jackets</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$200</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$120</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-before" style="left: 879.25px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_jacket71.jpg" alt="Thermoball Insulated Jacket">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">Thermoball Insulated Jacket</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$100</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$78</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-before" style="left: 1099.06px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_jacket711.jpg" alt="Thermoball Insulated Jacket">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">Thermoball Insulated Jacket</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$100</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$78</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-before" style="left: 1318.88px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_cross142.jpg" alt="High Quality Running Shoes For Women">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">High Quality Running Shoes For Women</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$400</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$350</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-before" style="left: 1538.69px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_cross121.jpg" alt="High Quality Running Shoes For Women">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">High Quality Running Shoes For Women</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$400</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$350</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-before" style="left: 1758.5px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_cross131.jpg" alt="High Quality Running Shoes For Woman">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">High Quality Running Shoes For Woman</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$300</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$250</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-before" style="left: 1978.31px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_cross111.jpg" alt="High Quality Running Shoes For Women">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">High Quality Running Shoes For Women</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$400</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$350</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="images/img_products/">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-before" style="left: 2198.12px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_cross102.jpg" alt="High Quality Running Shoes For Woman">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">High Quality Running Shoes For Woman</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$300</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$250</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-before" style="left: 2417.94px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_cross91.jpg" alt="High Quality Running Shoes For Men">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">High Quality Running Shoes For Men</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$400</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$350</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-before" style="left: 2637.75px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_cross81.jpg" alt="High Quality Running Shoes For Woman">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">High Quality Running Shoes For Woman</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$190</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$200</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-before" style="left: 2857.56px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_cross51.jpg" alt="High Quality Running Shoes For Woman">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">High Quality Running Shoes For  Woman</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$190</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$200</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-before" style="left: 3077.38px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_cross61.jpg" alt="High Quality Running Shoes For Men">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">High Quality Running Shoes For Men</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$200</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$280</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-before" style="left: 3297.19px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_100-original-New-2015-cross41.jpg" alt="High Quality Running Shoes For Men">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">High Quality Running Shoes For Men</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$250</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$200</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-active" style="left: 3517px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_cross32.jpg" alt="High Quality Running Shoes For Men">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">High Quality Running Shoes For Men</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$190</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$250</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-after" style="left: 3736.81px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_cross22.jpg" alt="High Quality Running Shoes For Men">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">High Quality Running Shoes For Men</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$190</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$150</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-after" style="left: 3956.62px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_cross23.jpg" alt="High Quality Running Shoes For Men">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">High Quality Running Shoes For Men</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$250</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$200</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="block_item uk-slide-after" style="left: 4176.44px; width: 219.812px;">

                                                    <div class="image">
                                                        <div class="image_block">
                                                            <a draggable="false" href="product.html">
                                                                <img draggable="false" class="jshop_img" src="images/img_products/thumb_jacket63.jpg" alt="High-quality Men's Sport Suit">
                                                            </a>
                                                        </div>
                                                        <div class="name">
                                                            <a draggable="false" href="product.html">High-quality Men's Sport Suit</a>
                                                        </div>
                                                    </div>
                                                    <div class="actions-wrap">
                                                        <div class="price-wrap">
                                                            <div class="old_price"><span>$200</span>
                                                            </div>

                                                            <div class="jshop_price">
                                                                <span>$120</span>
                                                            </div>
                                                        </div>

                                                        <div class="buttons">
                                                            <a draggable="false" class="button_buy" href="#">Buy</a>
                                                        </div>

                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="fun-shop-btn">
                                    <a href="category.html"><span>View all</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="tm-bottom-d-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-d" class="tm-bottom-d uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="last-video-wrap">
                                <div class="uk-container uk-container-center">
                                    <div class="uk-grid">
                                        <div class="uk-width-medium-1-1">
                                            <div class="last-video-title">
                                                <h2>Last <span>Video</span></h2>
                                            </div>
                                        </div>
                                        <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                            <div class="last-video-text">
                                                Nullam quis eros tellus. Duis sit amet neque nec orci feugiat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed turpis aliquet, pharetra enim sit amet, congue erat.
                                            </div>
                                        </div>
                                        <div class="uk-width-medium-8-10 uk-width-small-1-1 uk-push-1-10">
                                            <iframe src="https://www.youtube.com/embed/_u20ZIIxwuc?rel=0&amp;showinfo=0" allowfullscreen="" height="546" width="970"></iframe>
                                        </div>
                                        <div class="uk-width-medium-1-1 uk-width-small-1-1 partners-slider">
                                            <div data-uk-slideset="{small: 2, medium: 5, large: 5}" dir="ltr">
                                                <div class="uk-slidenav-position">
                                                    <ul class="uk-grid uk-slideset uk-grid-width-1-1 uk-grid-width-large-1-5 uk-grid-width-medium-1-5 uk-grid-width-small-1-2">
                                                        <li class="uk-active" style=""><img src="images/partners-img.png" alt="">
                                                        </li>
                                                        <li class="uk-active" style=""><img src="images/partners-img1.png" alt="">
                                                        </li>
                                                        <li class="uk-active" style=""><img src="images/partners-img2.png" alt="">
                                                        </li>
                                                        <li class="uk-active" style=""><img src="images/partners-img3.png" alt="">
                                                        </li>
                                                        <li class="uk-active" style=""><img src="images/partners-img4.png" alt="">
                                                        </li>
                                                        <li style="display: none;"><img src="images/partners-img.png" alt="">
                                                        </li>
                                                        <li style="display: none;"><img src="images/partners-img1.png" alt="">
                                                        </li>
                                                        <li style="display: none;"><img src="images/partners-img2.png" alt="">
                                                        </li>
                                                        <li style="display: none;"><img src="images/partners-img3.png" alt="">
                                                        </li>
                                                        <li style="display: none;"><img src="images/partners-img4.png" alt="">
                                                        </li>
                                                        <li style="display: none;"><img src="images/partners-img.png" alt="">
                                                        </li>
                                                        <li style="display: none;"><img src="images/partners-img1.png" alt="">
                                                        </li>
                                                        <li style="display: none;"><img src="images/partners-img2.png" alt="">
                                                        </li>
                                                        <li style="display: none;"><img src="images/partners-img3.png" alt="">
                                                        </li>
                                                        <li style="display: none;"><img src="images/partners-img4.png" alt="">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <ul class="uk-slideset-nav uk-dotnav uk-flex-center"><li data-uk-slideset-item="0" class="uk-active"><a></a></li><li data-uk-slideset-item="1"><a></a></li><li data-uk-slideset-item="2"><a></a></li></ul>
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
                                                            <h2>Get in touch</h2>
                                                        </div>
                                                        <div id="aiContactSafe_form_1">
                                                            <div class="aiContactSafe" id="aiContactSafe_mainbody_1">
                                                                <div class="contentpaneopen">
                                                                    <div id="aiContactSafeForm">
                                                                        <form method="post" id="adminForm_1" name="adminForm_1">
                                                                            <div id="displayAiContactSafeForm_1">
                                                                                <div class="aiContactSafe" id="aiContactSafe_contact_form">
                                                                                    <div class="aiContactSafe" id="aiContactSafe_info"></div>
                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_name">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_name"><label for="aics_name">Name</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <input name="aics_name" id="aics_name" class="textbox" placeholder="Name" value="" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_email">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_email"><label for="aics_email">E-mail</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <input name="aics_email" id="aics_email" class="email" placeholder="Email" value="" type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="aiContactSafe_row" id="aiContactSafe_row_aics_message">
                                                                                        <div class="aiContactSafe_contact_form_field_label_left"><span class="aiContactSafe_label" id="aiContactSafe_label_aics_message"><label for="aics_message">Message</label></span>&nbsp;
                                                                                            <label class="required_field">*</label>
                                                                                        </div>
                                                                                        <div class="aiContactSafe_contact_form_field_right">
                                                                                            <textarea name="aics_message" id="aics_message" cols="40" rows="10" class="editbox" placeholder="Message"></textarea>
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
                                   
                          
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="bottom-wrapper">
            <div class="tm-bottom-f-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-f" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                        <div class="uk-width-1-1 uk-row-first">
                            <div class="uk-panel">
                                <div class="footer-logo">
                                    <a href="/"><img src="images/footer-logo-img.png" alt=""><span>Sport</span>.ak</a>
                                </div>
                                <div class="footer-socials">
                                    <div class="social-top">
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-google"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-pinterest"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-flickr"></span></a>
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

            <div class="tm-bottom-g-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-g" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                        <div class="uk-width-1-1 uk-width-large-1-2 uk-row-first">
                            <div class="uk-panel" style="min-height: 90px;">
                                <div class="match-list-wrap foot">
                                    <div id="carusel-7" class="uk-slidenav-position" data-uk-slideshow="{ height : 37, autoplay:true, animation:'scroll' }">
                                        <div class="last-match-top">
                                            <div class="last-match-title">Last match</div>
                                            <div class="footer-slider-btn">
                                                <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                                                <a href="/" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <ul class="uk-slideshow" style="height: 37px;">
                                            <li class="" aria-hidden="true" style="height: 37px; animation-duration: 500ms;">
                                                <div class="match-list-item alt foot">
                                                    <div class="wrapper">
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                            </a>
                                                        </div>
                                                        <div class="team-name">
                                                            England </div>
                                                        <div class="versus">VS</div>

                                                        <div class="team-name">
                                                            Amsterdam </div>
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                            </a>
                                                        </div>
                                                        <a class="read-more" href="match-single.html">Read More</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" aria-hidden="true" style="height: 37px; animation-duration: 500ms;">
                                                <div class="match-list-item alt foot">
                                                    <div class="wrapper">
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                            </a>
                                                        </div>
                                                        <div class="team-name">
                                                            Cambridgehire </div>
                                                        <div class="versus">VS</div>

                                                        <div class="team-name">
                                                            china </div>
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                            </a>
                                                        </div>
                                                        <a class="read-more" href="match-single.html">Read More</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="uk-active" aria-hidden="false" style="height: 37px; animation-duration: 500ms;">
                                                <div class="match-list-item alt foot">
                                                    <div class="wrapper">
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava4.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)">
                                                            </a>
                                                        </div>
                                                        <div class="team-name">
                                                            Cambridgehire </div>
                                                        <div class="versus">VS</div>

                                                        <div class="team-name">
                                                            china </div>
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava5.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-20)" title="Cambridgehire VS china (2015-11-20)">
                                                            </a>
                                                        </div>
                                                        <a class="read-more" href="match-single.html">Read More</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" aria-hidden="true" style="height: 37px; animation-duration: 500ms;">
                                                <div class="match-list-item alt foot">
                                                    <div class="wrapper">
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                            </a>
                                                        </div>
                                                        <div class="team-name">
                                                            England </div>
                                                        <div class="versus">VS</div>

                                                        <div class="team-name">
                                                            Amsterdam </div>
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                            </a>
                                                        </div>
                                                        <a class="read-more" href="match-single.html">Read More</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li aria-hidden="true" style="height: 37px; animation-duration: 500ms;" class="">
                                                <div class="match-list-item alt foot">
                                                    <div class="wrapper">
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                            </a>
                                                        </div>
                                                        <div class="team-name">
                                                            Cambridgehire </div>
                                                        <div class="versus">VS</div>

                                                        <div class="team-name">
                                                            china </div>
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                            </a>
                                                        </div>
                                                        <a class="read-more" href="match-single.html">Read More</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" aria-hidden="true" style="height: 37px; animation-duration: 500ms;">
                                                <div class="match-list-item alt foot">
                                                    <div class="wrapper">
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava4.png" class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)">
                                                            </a>
                                                        </div>
                                                        <div class="team-name">
                                                            King </div>
                                                        <div class="versus">VS</div>

                                                        <div class="team-name">
                                                            china </div>
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava5.png" class="img-polaroid" alt="King VS china (2015-11-20)" title="King VS china (2015-11-20)">
                                                            </a>
                                                        </div>
                                                        <a class="read-more" href="match-single.html">Read More</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" aria-hidden="true" style="height: 37px; animation-duration: 500ms;">
                                                <div class="match-list-item alt foot">
                                                    <div class="wrapper">
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                            </a>
                                                        </div>
                                                        <div class="team-name">
                                                            England </div>
                                                        <div class="versus">VS</div>

                                                        <div class="team-name">
                                                            Amsterdam </div>
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava1.png" class="img-polaroid" alt="England VS Amsterdam (2015-11-14)" title="England VS Amsterdam (2015-11-14)">
                                                            </a>
                                                        </div>
                                                        <a class="read-more" href="match-single.html">Read More</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="" aria-hidden="true" style="height: 37px; animation-duration: 500ms;">
                                                <div class="match-list-item alt foot">
                                                    <div class="wrapper">
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava2.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                            </a>
                                                        </div>
                                                        <div class="team-name">
                                                            Cambridgehire </div>
                                                        <div class="versus">VS</div>

                                                        <div class="team-name">
                                                            china </div>
                                                        <div class="logo">
                                                            <a href="match-single.html">
                                                                <img src="images/team-ava3.png" class="img-polaroid" alt="Cambridgehire VS china (2015-11-29)" title="Cambridgehire VS china (2015-11-29)">
                                                            </a>
                                                        </div>
                                                        <a class="read-more" href="match-single.html">Read More</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>




                                </div>
                            </div>
                        </div>

                        <div class="uk-width-1-1 uk-width-large-1-2">
                            <div class="uk-panel" style="min-height: 90px;">
                                <div class="acymailing_module" id="acymailing_module_formAcymailing54111">
                                    <div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing54111">
                                        <form id="formAcymailing54111" method="post" name="formAcymailing54111">
                                            <div class="acymailing_module_form">
                                                <div class="mail-title">Newsletters</div>
                                                <div class="acymailing_introtext">Suspendisse sodales, magna at dignissim cursus, velit ex porttitor eros.</div>
                                                <div class="clear"></div>
                                                <div class="space"></div>
                                                <table class="acymailing_form">
                                                    <tbody>
                                                        <tr>
                                                            <td class="acyfield_email acy_requiredField">
                                                                <span class="mail-wrap">
                                                                    <input id="user_email_formAcymailing54111" onfocus="if(this.value == 'Enter your email') this.value = '';" onblur="if(this.value=='') this.value='Enter your email';" class="inputbox" name="user[email]" style="width:80%" value="Enter your email" title="Enter your email" type="text">
                                                            </span>
                                                            </td>
                                                        </tr>
                                                        <tr>

                                                            <td class="acysubbuttons">
                                                                <span class="submit-wrap">
                                                                    <span class="submit-wrapper">
                                                                        <input class="button subbutton btn btn-primary" value="Subscribe" name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing54111'); }catch(err){alert('The form could not be submitted '+err);return false;}" type="submit">
                                                                    </span>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
                                            <li class="item-165"><a href="about.html">About</a>
                                            </li>
                                            <li class="item-166"><a href="players.html">Players</a>
                                            </li>
                                            <li class="item-167"><a href="match-list.html">Match</a>
                                            </li>
                                            <li class="item-168"><a href="results.html">Results</a>
                                            </li>
                                            <li class="item-169"><a href="news.html">News</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="copyrights">Copyright © 2015 <a href="/">Sportak Team</a>. All Rights Reserved.</div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

        <div id="offcanvas" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav uk-nav-offcanvas">
                    <li class="uk-parent uk-active"><a href="index.html">Home</a>
                        <ul class="uk-nav-sub">
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
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li class="uk-parent"><a href="#">Pages</a>
                        <ul class="uk-nav-sub">
                            <li><a href="players.html">Players</a>
                            </li>
                            <li><a href="gallery.html">Gallery</a>
                            </li>
                        </ul>
                    </li>
                    <li class="uk-parent"><a href="match-list.html">Match</a>
                        <ul class="uk-nav-sub">
                            <li><a href="results.html">Results</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="news.html">News</a>
                    </li>
                    <li><a href="category.html">Shop</a>
                    </li>
                    <li><a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/uikit.js"></script>
<script type="text/javascript" src="{{ url('js/SimpleCounter.js')}}"></script>
<script type="text/javascript" src="js/components/grid.js"></script>
<script type="text/javascript" src="js/components/slider.js"></script>
<script type="text/javascript" src="js/components/slideshow.js"></script>
<script type="text/javascript" src="js/components/slideset.js"></script>
<script type="text/javascript" src="js/components/sticky.js"></script>
<script type="text/javascript" src="js/components/lightbox.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>

<script type="text/javascript" src="js/theme.js"></script>
<script type="text/javascript">
    new SimpleCounter("countdown4", 1447448400, {
      'continue': 0,
      format: '{D} {H} {M} {S}',
      lang: {
          d: {
              single: 'day',
              plural: 'days'
          }, //days
          h: {
              single: 'hr',
              plural: 'hrs'
          }, //hours
          m: {
              single: 'min',
              plural: 'min'
          }, //minutes
          s: {
              single: 'sec',
              plural: 'sec'
          } //seconds
      },
      formats: {
          full: "<span class='countdown_number' style='color:  '>{number} </span> <span class='countdown_word' style='color:  '>{word}</span> <span class='countdown_separator'>:</span>", //Format for full units representation
          shrt: "<span class='countdown_number' style='color:  '>{number} </span>" //Format for short unit representation
      }
  });
</script>



</body>



    </html>