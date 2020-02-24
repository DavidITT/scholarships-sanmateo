@include ('comp_principales.encabezado')

@include('comp_principales.menu')



<br>
<br>
<h2 align="center"><strong>Escuelas registradas</strong></h2>
<br>
<br>

<p align="center"><button type="button" class="btn btn-danger" onclick="window.location.href = 'escuelas/create'"><i class="fas fa-plus-circle"></i> Nuevo Registro</button> </p>

<div class="form-group">
 <p>Bucar: <input type="text" class="form-control form-control-md" style="width:100%" id="search" placeholder="Busqueda..."></p>
</div>
<br>
  <table class="table table-hover table-wrapper-scroll-y my-custom-scrollbar table-responsive" id="tablabusqueda" align="center">
    <thead style="background-color: #D5DBDB">
      <tr align="center">
       <th>Id</th>
       <th>Nombre de la Escuela</th>
       <th>Nivel educativo</th>
       
     </tr>
   </thead>
   <tbody>
    @foreach($escuelas as $es)
    <tr align="center">
     <th>{!! $es->id!!}</th>
     <th>{!! $es->nombre_escuela !!}</th>
     <th>{!! $es->nivel->nombreNivel !!}</th>
      <th>
      <a href="{!! 'escuelas/'.$es->id.'/edit'  !!}"><button class="btn btn-sm btn-outline-success"><i class="fas fa-eye-dropper"></i></button>  
                        {!! Form::open(['method' => 'DELETE' , 'url' => '/escuelas/'.$es->id]) !!}
                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i> </button>
                        {!! Form::close() !!}
		</a></a>
     </th>
  </tr>
  @endforeach
</tbody>
</table>

@include('comp_principales.pie_pag')