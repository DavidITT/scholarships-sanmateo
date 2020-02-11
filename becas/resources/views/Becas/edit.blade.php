@include ('comp_principales.encabezado')

@include('comp_principales.menu')

<br>
<br>
<h2 align="center"><strong>Editar Registro</strong></h2>
<br>
<br>

         

{!! Form::open([ 'method' => 'PATCH' , 'url'=>'/becas/'.$becas->folio]) !!}

<div class="form-group">
	          {!! Form::label ('n_folio','Numero de folio') !!}
              {!! Form::text ('n_folio',$becas->n_folio,['placeholder'=>'Ingrese numero de folio','class'=>'form-control','required','disabled']) !!}
              
</div>

	<u><h4>Datos del estudiante</h4></u>
	<div class="row">

		<br>
		<br>

		<div class="col-sm-4">
			<div class="form-group">
				{!! Form::label ('est_paterno','Apellido Paterno') !!}
                {!! Form::text ('est_paterno',$becas->est_paterno,['placeholder'=>'Ingrese apellido paterno','class'=>'form-control','required']) !!}
			</div>
		</div>

		<div class="col-sm-4">

			<div class="form-group">
				{!! Form::label ('est_materno','Apellido Materno') !!}
                {!! Form::text ('est_materno',$becas->est_materno,['placeholder'=>'Ingrese apellido paterno','class'=>'form-control','required']) !!}
			</div>

		</div>

		<div class="col-sm-4">
			<div class="form-group">
				{!! Form::label ('est_nombre','Nombre') !!}
                {!! Form::text ('est_nombre',$becas->est_nombre,['placeholder'=>'Ingrese nombre(s)','class'=>'form-control','required']) !!}
			</div>
		</div>
	</div>

	<u><h4>Direccion</h4></u>

	<div class="row">

		<div class="col-sm-4">
			<div class="form-group">
				{!! Form::label ('est_calle','Calle') !!}
                {!! Form::text ('est_calle',$becas->est_calle,['placeholder'=>'Ingrese calle','class'=>'form-control','required']) !!}
			</div>
		</div>

		<div class="col-sm-4">
			<div class="form-group">
				{!! Form::label ('est_numero','Numero') !!}
                {!! Form::text ('est_numero',$becas->est_numero,['placeholder'=>'Ingrese numero','class'=>'form-control','required']) !!}
			</div>
		</div>

		<div class="col-sm-4">
			<div class="form-group">
				{!! Form::label ('est_barrio','Barrio/Colonia') !!}
                {!! Form::text ('est_barrio',$becas->est_barrio,['placeholder'=>'Ingrese barrio o colonia','class'=>'form-control','required']) !!}
			</div>
		</div>
	</div>


	<u><h4>Nivel educativo</h4></u>

	<div class="row">
		<div class="col-sm-4">
			<br>
			<div class="form-group">
				{!! Form::label ('niv_educativo','Nivel Educativo') !!}
				{{ Form::select('niv_educativo',['Primaria' => 'Primaria', 'Secundaria' => 'Secundaria', 'Medio Superior' => 'Medio Superior'], $becas->niv_educativo, ['class' => 'form-control','required','placeholder'=>'--Seleccionar--']) }}
			</div>
			<br>

		</div>
		<div class="col-sm-4">
			<br>
			<div class="form-group">
				
					{!! Form::label ('est_grado','Grado') !!}
				    {{ Form::select('est_grado',['Primero' => 'Primero', 'Segundo' => 'Segundo', 'Tercero' => 'Tercero','Cuarto' => 'Cuarto','Quinto' => 'Quinto', 'Sexto' => 'Sexto'], $becas->est_grado, ['class' => 'form-control','required','placeholder'=>'--Seleccionar--']) }}
			
			</div>
		</select>
		<br>
	</div>
	<div class="col-sm-4">
		<br>
		<div class="form-group">
			    {!! Form::label ('promedio','Promedio') !!}
                {!! Form::text ('promedio',$becas->promedio,['placeholder'=>'Ingrese promedio','class'=>'form-control','required']) !!}
		</div>
	</div>

</div>

<u><h4>Datos de la Escuela </h4></u>
<br>
<div class="form-group">
	          {!! Form::label ('nom_escuela','Nombre de la Escuela') !!}
              {!! Form::text ('nom_escuela',$becas->nom_escuela,['placeholder'=>'Ingrese nombre de la escuela','class'=>'form-control','required']) !!}
</div>
<br>
<u><h4>Datos de los Padres</h4></u>
<br>
<h5>Datos del Padre</h5>

<div class="form-group">
	          {!! Form::label ('n_padre','Nombre completo del padre o tutor') !!}
              {!! Form::text ('n_padre',$becas->n_padre,['placeholder'=>'Ingrese nombre completo del padre (Apellido Paterno, Apellido Materno, Nombre(s))','class'=>'form-control','required']) !!}

              @if($errors->has('n_padre'))
                     <div class="alert alert-warning" role="alert">
                           <p>El nombre del padre que intenta ingresar ya existe</p>
                     </div>
              @endif  

           
             
</div>

<h5>Datos de la Madre</h5>

<div class="form-group">
	          {!! Form::label ('n_madre','Nombre completo de la madre o tutora') !!}
              {!! Form::text ('n_madre',$becas->n_madre,['placeholder'=>'Ingrese nombre completo de la madre (Apellido Paterno, Apellido Materno, Nombre(s))','class'=>'form-control','required']) !!}

              @if($errors->has('n_madre'))
                     <div class="alert alert-warning" role="alert">
                           <p>El nombre de la madre que intenta ingresar ya existe</p>
                     </div>
              @endif  


</div>

<br>

<p align="center">



	{!! Form::submit('Guardar',['class'=>'btn btn-outline-info btn-block']) !!}
    {!! Form::close() !!}

</p>

@include('comp_principales.pie_pag')