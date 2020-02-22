

@include ('comp_principales.encabezado')

@include('comp_principales.menu')

<br>
<br>
<h2 align="center"><strong>Becas Registradas</strong></h2>
<br>
<br>

<p align="center"><button type="button" class="btn btn-sm" style="background-color: #EB4E4E; color: white" onclick="window.location.href = 'aspirantes/create'">Nuevo Registro</button> </p>

<div class="form-group">
 <p>Bucar: <input type="text" class="form-control form-control-md" style="width:100%" id="search" placeholder="Busqueda..."></p>
</div>
<br>

<div class="table-responsive">
  <table class="table table-hover" id="tablabusqueda">
    <thead style="background-color: #D5DBDB">
      <tr align="center">
       <th>Folio</th>
       <th>Nombre</th>
       <th>Dirección</th>
       <th>Barrio</th>
       <th>Telefono</th>
       <th>Promedio</th>
       <th>Escuela</th>
       <th>N.Padre</th>
       <th>N.Madre</th>
       <th>Acciones</th>
     </tr>
   </thead>
   <tbody>
    @foreach($aspirantes as $as)
    <tr align="center">
     <th>{!! $as->n_folio !!}</th>

     <th>{!! $as->aPaterno."&nbsp".$as->aMaterno."&nbsp".$as->nombre !!}</th>
     <th>{!! $as->calle."&nbsp #".$as->numero !!}</th>
     <td>{!! $as->barrio->nombre !!}</td>
     <th>{!! $as->telefono !!}</th>

     <th>{!! $as->promedio !!}</th>

     <th>{!! $as->escuela->nombre_escuela !!}</th>

     <th>{!! $as->nPadre !!}</th>
     <th>{!! $as->nMadre !!}</th>

     <th>
      <a href="{!! 'aspirantes/'.$as->id.'/edit'  !!}"><button class="btn btn-sm" style="background-color: #FF8E40; color: white">Editar</button></a>
    </th>

  </tr>
  @endforeach

</tbody>

</table>
</div>




@include('comp_principales.pie_pag')