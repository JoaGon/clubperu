@extends('layouts.app')

@section('htmlheader_title')
    MAIN NAVIGATION
@endsection


@section('main-content')

    <!-- Main content -->
     <!-- Custom CSS -->
    <link href="{{ url('dist/css/sb-admin-2.css')}}" rel="stylesheet">

    <style>
        .btn-alignment {
            background-color: #0A0E10;
            border-radius: 0%;
        }
        .btn-alignment:hover {
            border-color: #c1531a;
        }
        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control{
            background-color: #0A0E10;
        }
        .btn-success[disabled]{
            background-color: #ffffff;
            border-color: #ffffff;
        }

    </style>
    <script>
        var slide = "<?php echo (isset($_GET['slide']) ? ($_GET['slide']):("") ); ?>";
    </script>
    <section class="content">
        <div class="row">
     
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9"  >
              
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9" id="home" style="margin-left: 15px;" ng-module="spSlide" ng-controller="spControllerNewSlide">
              <form name="myForm" id="myForm" action="new_slide_create" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">Imagen</label>
                    <input type="file" class="form-control-file" name="image" id="image">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
             </div>
            </div>
        </div>
    </section>



@endsection