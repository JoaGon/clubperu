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
       
    </script>
    <section class="content">
        <div class="row">
       
             <div class="row col-lg-12" style="margin: 15px">
                <div class="box box-info"  style="margin-top: 5%;">
                   <div class="box-header with-border ">
                        <h3 class="box-title">Mis Campa&ntilde;as</h3>
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
                                            Nombre
                                        </th>
                                        <th>
                                            Imagen
                                        </th>
                                        
                                         <th>
                                            Acciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                 @foreach($slides as $slide)
                                    <tr>
                                    
                                        <td>
                                            {{$slide->id_header_pictures}}
                                        </td>
                                        <td>
                                            {{$slide->activity_id}}
                                        </td>
                                        <td>
                                           
                                            <div style="padding-bottom: 20px;color: white;padding-top: 10px; font-size: 20px;font-weight: bold;text-align: center;">
                                                <a class="col-xs-12 col-sm-3 col-md-3" ng-click="edit({{$slide->id_header_pictures}})"> 
                                                    <img src=" {{$slide->picture}}" width="40" height="40">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="childTd" style="width: 15%;">
                                            <div style="padding-bottom: 20px;color: white;padding-top: 10px; font-size: 20px;font-weight: bold;text-align: center;">
                                                <a class="col-xs-12 col-sm-3 col-md-3" id="try" data-link="{{ url('/edit_slide') }}" onclick="edit({{$slide->id_header_pictures}})"> 
                                                    <i class="fa fa-edit pull-right delete" style="font-family: FontAwesome !important;width: 20%;">
                                                    </i>
                                                </a>
                                                <a class="col-xs-12 col-sm-3 col-md-3" onclick="remove({{$slide->id_header_pictures}})"> 
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
                   <!-- modal insert token-->
        <div class="modal fade bs-modal" id="modal_edit" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form id="form_create" action="create" enctype="multipart/form-data" method="POST" >
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        </div>
                        <div class="modal-body">

                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="hidden" name="id_edit" id="id_edit">

                            <!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name_edit" aria-describedby="emailHelp" placeholder="">
                            </div>
                            <div class="form-group">
                            <img src="" id="image" style="width: 10%; height: 10%" >
                                 </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Imagen</label>
                                <input type="file" class="form-control form-control-file" name="image" id="image">
                            </div>
                            </div>

                        </div>
                   
                        <div class="modal-footer">
                            <button id="boton-modal" ng-click="discard()" type="button" style=" float: left;" class="btn btn-warning" data-dismiss="modal"><i class="fa fa-remove"></i>Cancelar</button>
                             <button id="boton-save-modal" type="submit" class="btn btn-primary" > <i class="fa fa-floppy-o" aria-hidden="true"></i>Guardar</button>
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
    



function edit(val){

  
  var url = $('#try').attr("data-link");
  //$('#modal_edit').modal('show');
       console.log(url);

  $.ajax({

    url: url,

    type:"GET",

    data: {  '_token': $('input[name=_token]').val(),id : val },

    success:function(data){
       console.log(data);

      document.getElementById("id_edit").value = data.slides[0].id_header_pictures;

      document.getElementById("name_edit").value = data.slides[0].activity_id;

      $("#image").attr("src",data.slides[0].picture);



      $('#modal_edit').modal('show');


    },error:function(){

      alert("error!!!!");

    }

  }); //end of ajax

}

function update(){
    console.log('asad')

   var formData = new FormData($('#form_create')[0]);
   console.log('asda', formData)
   $.ajax({

    url: "{{ url('/create') }}",

    type:"POST",

    data: formData,

    success:function(data){
        console.log(data)
        location.reload();

    },error:function(){

      alert("error!!!!");

    }

  }); //end of ajax

}


function remove(val){

  console.log('dadsada')
  var url = $('#try').attr("data-link");
  //$('#modal_edit').modal('show');
       console.log(url);

  $.ajax({

    url: "{{ url('/delete') }}",

    type:"GET",

    data: {  '_token': $('input[name=_token]').val(),id : val },

    success:function(data){
       console.log(data);
       location.reload();

    },error:function(){

      alert("error!!!!");

    }

  }); //end of ajax

}

  

</script>


@endsection