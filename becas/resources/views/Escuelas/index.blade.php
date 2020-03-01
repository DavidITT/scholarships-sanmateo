@include ('comp_principales.encabezado')

@include('comp_principales.menu')


<br>
<br>
<h4 align="center"><strong>Escuelas Registradas</strong></h4>
<br>

           @if(session('success'))
               <div class="alert alert-success alert-dismissible">
                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                     <strong><i class="fas fa-check-circle"></i> ¡Exito!</strong> {{ session('success') }}
                </div>
            @endif


<p align="center"><button type="button" class="btn btn-danger" onclick="window.location.href = 'escuelas/create'"><i class="fas fa-plus-circle"></i> Nuevo Registro</button> </p>

<div class="form-group">
 <p>Bucar: <input type="text" class="form-control form-control-md" style="width:100%" id="search" placeholder="Busqueda..."></p>
</div>
<br>
  <table class="table-hover table-responsive-x" id="tablabusqueda" style="width:100%" >
    <thead style="background-color: #D5DBDB">
      <tr align="center">
       <th>Matricula</th>
       <th>Nombre de Escuela</th>
       <th>Nivel Educativo</th>
       <th>Direccion</th>
       <th>Acciones</th>
     </tr>
   </thead>
   <tbody>
    @foreach($escuelas as $es)
    <tr align="center">
     <th>{!! $es->matricula !!}</th>
     <th>{!! $es->nombre_esc !!}</th>
     <th>{!! $es->nivel->nombreNiv!!}</th>
     <th>{!! $es->direccion!!}</th>
     <th>
      <a href="{!! 'escuelas/'.$es->id.'/edit'  !!}"><button class="btn btn-sm btn-outline-success"><i class="fas fa-eye-dropper"></i></button>
                            
                        {!! Form::open(['method' => 'DELETE' , 'url' => '/escuelas/'.$es->id]) !!}
                        <button class="btn btn-sm btn-outline-danger" onclick="return ConfirmDelete()"><i class="fas fa-trash"></i> </button>
                        {!! Form::close() !!}
      </a>
     </th>
  </tr>
  @endforeach
</tbody>
</table>

<script type="text/javascript">
  function ConfirmDelete(){
    var respuesta = confirm("¿Estas seguro que deseas eliminar este registro?");
    if(respuesta == true){
         
      return true;
    }else{
      alertify.error('Se ha cancelado la operacion');
      return false;
    }
  }
</script>
@include('comp_principales.pie_pag')

