@include ('comp_principales.encabezado')

@include('comp_principales.menu')


<br>
<br>
<h4 align="center"><strong>Escuelas Registradas</strong></h4>
<br>


<p align="center"><button type="button" class="btn btn-danger" onclick="window.location.href = 'escuelas/create'"><i class="fas fa-plus-circle"></i> Nuevo Registro</button> </p>

<div class="form-group">
 <p>Bucar: <input type="text" class="form-control form-control-md" style="width:100%" id="search" placeholder="Busqueda..."></p>
</div>
<br>
  <table class="table table-hover table-wrapper-scroll-y my-custom-scrollbar table-responsive" id="tablabusqueda">
    <thead style="background-color: #D5DBDB">
      <tr align="center">
       <th>Id</th>
       <th>Nombre de Escuela</th>
       <th>Nivel Educativo</th>
       <th>Acciones</th>
     </tr>
   </thead>
   <tbody>
    @foreach($escuelas as $es)
    <tr align="center">
     <th>{!! $es->id !!}</th>
     <th>{!! $es->nombre_esc !!}</th>
     <th>{!! $es->nivel->nombreNiv!!}</th>
     <th>
      <a href="{!! 'escuelas/'.$es->id.'/edit'  !!}"><button class="btn btn-sm btn-outline-success"><i class="fas fa-eye-dropper"></i></button>
                            
                        {!! Form::open(['method' => 'DELETE' , 'url' => '/escuelas/'.$es->id]) !!}
                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i> </button>
                        {!! Form::close() !!}

      <a 
        href="{!! asset('crear_talon_aspirante/'.$es->id) !!}" target="_blank"><button class="btn btn-sm btn-outline-info" ><i class="fas fa-print"></i></button>
      </a></a></a>
     </th>
  </tr>
  @endforeach
</tbody>
</table>

@include('comp_principales.pie_pag')

