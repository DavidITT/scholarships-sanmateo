

@include ('comp_principales.encabezado')

@include('comp_principales.menu')

<br>
<br>
<h2 align="center"><strong>Becas Registradas</strong></h2>
<br>
<br>

<p align="center"><button type="button" class="btn btn-sm" style="background-color: #EB4E4E; color: white" onclick="window.location.href = 'registro'">Nuevo Registro</button> </p>

<div class="form-group">
 <p>Bucar: <input type="text" class="form-control form-control-md" style="width:100%" id="search" placeholder="Busqueda..."></p>
</div>
<br>

<div class="table-responsive">
  <table class="table table-hover" id="tablabusqueda">
    <thead style="background-color: #D5DBDB">
      <tr align="center">
       <th>Folio</th>
       <th>A.Paterno</th>
       <th>A.Materno</th>
       <th>Nombre</th>
       <th>Calle</th>
       <th>Numero</th>
       <th>Barrio</th>
       <th>Niv.Educ.</th>
       <th>Grado</th>
       <th>Promedio</th>
       <th>Escuela</th>
       <th>N.Padre</th>
       <th>N.Madre</th>
       <th>Acciones</th>
     </tr>
   </thead>
   <tbody style="background-color: #F5F5F5  ">

    @foreach($becas as $bec)
    <tr align="center">
     <th>{!! $bec->n_folio !!}</th>

     <th>{!! $bec->est_paterno !!}</th>
     <th>{!! $bec->est_materno !!}</th>
     <th>{!! $bec->est_nombre !!}</th>

     <th>{!! $bec->est_calle !!}</th>
     <th>{!! $bec->est_numero !!}</th>
     <th>{!! $bec->est_barrio !!}</th>

     <th>{!! $bec->niv_educativo !!}</th>
     <th>{!! $bec->est_grado !!}</th>
     <th>{!! $bec->promedio !!}</th>

     <th>{!! $bec->nom_escuela !!}</th>

     <th>{!! $bec->n_padre !!}</th>
     <th>{!! $bec->n_madre !!}</th>

     <th>
      <a href="{!! 'becas/'.$bec->folio.'/edit'  !!}"><button class="btn btn-sm" style="background-color: #FF8E40; color: white">Editar</button></a>
    </th>

  </tr>
  @endforeach

</tbody>

</table>
</div>




@include('comp_principales.pie_pag')