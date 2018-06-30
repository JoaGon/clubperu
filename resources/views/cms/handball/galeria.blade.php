@extends('layouts.app')

@section('htmlheader_title')
    MAIN NAVIGATION
@endsection


@section('main-content')


    <section class="content">
        <div class="row">
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_beneficio">Agregar</button>
             <div class="row col-lg-12" style="margin: 15px">
                <div class="box box-info"  style="margin-top: 5%;">
                   <div class="box-header with-border ">
                        <h3 class="box-title">Managers</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive" style="overflow-x: hidden;">
                            <form id="form_create" action="manager_create" enctype="multipart/form-data" method="POST" >
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                </div>
                                <div class="modal-body">

                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                    <div class="box-body">
                                        <div class="form-group">
                                           <input id="input-id" type="file" class="file" data-preview-file-type="text" >
                                        </div>
                                    </div>
                                </div>
                           
                                <div class="modal-footer">
                                    <div class="col-md-6">
                                       <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                            <!-- table responsive -->
                    </div>
                </div>

            </div>

            <div class="modal fade bs-modal" id="modal_beneficio" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form id="form_create" action="manager_create" enctype="multipart/form-data" method="POST" >
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            </div>
                            <div class="modal-body">

                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nombre</label>
                                        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Apellido</label>
                                        <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Numero de Telefono</label>
                                        <input type="text" class="form-control" name="phone" id="phone" aria-describedby="emailHelp" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="motivo" class="">Nivel de Educacion</label>
                                        <input class="form-control" id="ocupacion" type="text" class="form-control" name="position">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Imagen</label>
                                        <input type="file" class="form-control-file" name="image" id="image">
                                    </div>
                                </div>
                            </div>
                       
                            <div class="modal-footer">
                                <div class="col-md-6">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            
        </div>
    </section>
<script type="text/javascript">
    

</script>
@endsection