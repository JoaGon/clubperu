angular.module("Handball", [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('[[');
        $interpolateProvider.endSymbol(']]');
    })
    .controller("HandballController", function($scope, $http, $timeout, $q) {

        console.log('cacac')
         $http({
            method: "GET",
            url: "slides_slider",
            headers: {'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'},
            params: {}
        }).then(function successCallback(resp){

            $scope.slides = resp.data.slides;
            var m = $scope.slides;
            for(var i=0 ; i<1 ; i++) {
                if(i == '0'){
                    console.log('etra 1')
                    $ ('<div class="item active" style="height: 600px; !important"><img id="image_slide" style ="height:100%;width:100%"  class="image" src="'+m[i].picture+'"><div class="carousel-caption"><h3>Aui slide label "'+i+'"</h3></div> </div>').appendTo('.carousel-inner');
              
                }else{
                    $ ('<div class="item" style="height: 600px; !important"><img id="image_slide"  class="image" style ="height:100%;width:100%" src="'+m[i].picture+'"><div class="carousel-caption"><h3>Aui slide label "'+i+'"</h3></div> </div>').appendTo('.carousel-inner');
             
                }
                             
            }

        }); 

           
    });