@extends('layouts.app-sport')

@section('htmlheader_title')
	CLub peru
@endsection

@include('layouts.partials.handball.cabecera-handball')


@section('main-content')
<div   ng-app="Handball" ng-controller="HandballController" >
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
	</div>
</div>

<div class="tm-bottom-c-box tm-full-width  " style="background-color: white;">
<div class="uk-container uk-container-center">
    <section id="tm-bottom-c" class="tm-bottom-c uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

        <div class="uk-width-1-1 uk-row-first">
            <div class="uk-panel">
                <div class="shop-main-page-wrap" style="padding: 25px 0 20px 0;">
                    <div class="container uk-container-center">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="shop-title" style="float: left;">
                                    <h2>Beneficios</h2>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <div class="shop-text" id="beneficio" style="float: left;"> </div>
                            </div>
                           
                        </div>
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
                                                <h2><span>Actividades</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="latest_products jshop">

                                    <div data-uk-slider="{center:true, autoplay:false, pauseOnHover:true, autoplayInterval:5000}" dir="ltr">
                                    	<div class="uk-slider-container">
                                            <ul class="uk-slider uk-grid-width-large-1-6 uk-grid-width-medium-1-4 uk-grid-width-small-1-1  uk-grid uk-grid-medium" style="min-width: 4396.25px; min-height: 240px; transform: translateX(-1428.81px);">

                                              
                                      
                                            </ul>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="fun-shop-btn">
                                    	<a href="category.html"><span>Ver todos</span></a>
                                	</div>
                                </div>
                          	</div>
                        </div>
                    </div>
</div>
</div>
<script type="text/javascript">
       var managers = <?php echo json_encode($managers); ?>;
       var beneficio = <?php echo json_encode($beneficio); ?>;
       var activity = <?php echo json_encode($activity); ?>;
       var info_sport = <?php echo json_encode($info_sport); ?>;

</script>

@endsection
