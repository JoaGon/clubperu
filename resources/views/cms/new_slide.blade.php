@extends('layouts.app')

@section('htmlheader_title')
    MAIN NAVIGATION
@endsection


@section('main-content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9" id="home" style="margin-left: 15px;" ng-module="spSlide" ng-controller="spControllerNewSlide">
              <form name="myForm" id="myForm" action="new_slide_create" enctype="multipart/form-data" method="POST">
                <div class="col-lg-12">
                    <div class="box box-info" style="margin-top: 5%;">
                        <div class="box-header with-border ">
                            <h3 class="box-title">Registrar Slide</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                            </div>
                        </div>

                        <div class="box-body">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlFile1">Imagen</label>
                                <input type="file" class="form-control-file" name="image" id="image">
                              </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                        </div>

                    </div>
                </form>
             </div>
            </div>
        </div>
    </section>



@endsection