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
                        <h3 class="box-title">Beneficio Ajedrez</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="table-responsive" style="overflow-x: hidden;">
                            <table id="example2" class="table table-striped table-bordered table-hover"  id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Beneficio
                                        </th>
                                        
                                        <th>
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($ajedrez as $sport)
                                    <tr>
                                    
                                        <td>
                                            {{$sport->id_sport_description}}
                                        </td>
                                        <td>
                                            {{$sport->beneficio}}
                                        </td>
                                       
                                        <td class="childTd" style="width: 15%;">
                                            <div style="padding-bottom: 20px;color: white;padding-top: 10px; font-size: 20px;font-weight: bold;text-align: center;">
                                                <a class="col-xs-12 col-sm-3 col-md-3" id="try" data-link="{{ url('/edit_slide') }}" onclick="edit({{$sport->id_sport_description}})"> 
                                                    <i class="fa fa-edit pull-right delete" style="font-family: FontAwesome !important;width: 20%;">
                                                    </i>
                                                </a>
                                                <a class="col-xs-12 col-sm-3 col-md-3" onclick="remove({{$sport->id_sport_description}})"> 
                                                    <i class="fa fa-trash-o pull-right delete" style="font-family: FontAwesome !important;width: 20%;">
                                                    </i>
                                                </a>  
                                            </div>
                                        </td>
                                    </tr>
                                 @endforeach
                                </tbody>
                            </table>
                                <!-- /.table-responsive -->
                        </div>
                            <!-- table responsive -->
                    </div>
                </div>

            </div>

            <div class="modal fade bs-modal" id="modal_beneficio" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form id="form_create" action="beneficio_create_ajedrez" enctype="multipart/form-data" method="POST" >
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            </div>
                            <div class="modal-body">

                                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Beneficio</label>
                                        <input type="text" class="form-control" name="beneficio" id="name_edit" aria-describedby="emailHelp" placeholder="">
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



@endsection