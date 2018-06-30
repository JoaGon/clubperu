angular.module("Ajedrez", [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    })
    .controller("AjedrezController", function($scope, $http, $timeout, $q) {

        console.log('cacac', info_sport)
  
        $ ('<div class="item active" style="height: 600px; !important"><img id="image_slide" style ="height:100%;width:100%"  class="image" src="'+info_sport[0].picture_header+'"><div class="carousel-caption"></div> </div>').appendTo('.carousel-inner');
           
       $('#beneficio').text(beneficio[0].beneficio)

        var m = activity;
        var n = managers;
        for(var i=0 ; i<m.length ; i++) {

            $ ('<li class="block_item uk-slide-before" style="left: 0px; width: 219.812px;"><div class="image"><div class="image_block"><a draggable="false" href="product.html"> <img draggable="false" class="jshop_img" src="'+m[i].picture+'" alt="Sportswear outerwear coats"> </a> </div> <div class="name"><a draggable="false" href="product.html">"'+m[i].description+'"</a>  </div></div> <div class="actions-wrap"><div class="price-wrap"><div class="old_price"><span>"'+m[i].name+'"</span> </div> </div></div> </li>').appendTo('.uk-slider');

        }

        for(var i=0 ; i<n.length ; i++) {

            if(i == 0){
                $ ('<li  class="uk-active"><div class="img-wrap"><img width="400" src="'+n[i].picture+'" alt=""></div><div class="name" style="color: ">'+n[i].name +' <span>'+n[i].lastname+'</span></div> <div class="name2"> Nivel de Educacion: '+n[i].position+'</div><div class="email"> Email:'+n[i].email+'</div><div class="phone"> Telefono: '+n[i].phone_number+'</div> </li>').appendTo('.uk-slideset');
            }else {

                $ ('<li class="uk-active" style = "display:none"><div class="img-wrap"><img width="400" src="'+n[i].picture+'" alt=""></div><div class="name" style="color: ">'+n[i].name +'<span>'+n[i].lastname+'</span></div> <div class="name2"> Nivel de Educacion: '+n[i].position+'</div><div class="email"> Email:'+n[i].email+'</div><div class="phone"> Telefono:'+n[i].phone_number+'</div> </li>').appendTo('.uk-slideset ');
            }

        }
         
    });