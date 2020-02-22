
@include ('comp_principales.encabezado')

@include('comp_principales.menu')

<br>
<br>
<h2 align="center"><strong> Nuevo Registro</strong></h2>
<br>
<br>  



{!! Form::open(['url'=>'/aspirantes', 'method'=>'POST']) !!}

<div class="form-group">
          {!! Form::label ('n_folio','Numero de folio') !!}
          {!! Form::number ('n_folio',null,['placeholder'=>'Ingrese numero de folio','class'=>'form-control','min=0','required','pattern=^[0-9]+']) !!}

           @if($errors->has('n_folio'))
                 <div class="alert alert-warning" role="alert">
                       <p>El numero de folio que intenta ingresar ya existe verifique los datos</p>
                 </div>
          @endif    
</div>
<u><h4>Datos del estudiante</h4></u>
<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('aPaterno','Apellido Paterno') !!}
            {!! Form::text ('aPaterno',null,['placeholder'=>'Ingrese apellido paterno','class'=>'form-control','required','pattern'=>'[A-Za-z] {1-50}']) !!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('aMaterno','Apellido Materno') !!}
            {!! Form::text ('aMaterno',null,['placeholder'=>'Ingrese apellido paterno','class'=>'form-control','required']) !!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('nombre','Nombre') !!}
            {!! Form::text ('nombre',null,['placeholder'=>'Ingrese nombre(s)','class'=>'form-control','required']) !!}
		</div>
	</div>
</div>

<u><h4>Direccion</h4></u>

<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('calle','Calle') !!}
            {!! Form::text ('calle',null,['placeholder'=>'Ingrese calle','class'=>'form-control','required']) !!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('numero','Numero') !!}
            {!! Form::text ('numero',null,['placeholder'=>'Ingrese numero','class'=>'form-control','required']) !!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('id_Barrio','Barrio') !!}
            {!! Form::select ('id_Barrio', $barrio->pluck('nombre','id')->all(),null,['placeholder'=>'--Seleccionar--','class'=>'form-control','required']) !!}
		</div>
	</div>
</div>

<u><h4>Nivel Educativo</h4></u>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			 {!! Form::label ('id_Escuela','Nombre de la Escuela') !!}
             {!! Form::select ('id_Escuela',$escuela->pluck('nombre_escuela','id')->all(),null,['placeholder'=>'--Seleccionar--','class'=>'form-control','required']) !!}
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label ('niv_educativo','Nivel Educativo') !!}
			{{ Form::select('niv_educativo',$nivel->pluck('nombreNivel','id')->all(), null, ['class' => 'form-control','required','placeholder'=>'--Seleccionar--']) }}
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label ('grado','Grado') !!}
		    {{ Form::select('grado',['Primero' => 'Primero', 'Segundo' => 'Segundo', 'Tercero' => 'Tercero','Cuarto' => 'Cuarto','Quinto' => 'Quinto', 'Sexto' => 'Sexto'], null, ['class' => 'form-control','required','placeholder'=>'--Seleccionar--']) }}
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label ('promedio','Promedio') !!}
            {!! Form::text ('promedio',null,['placeholder'=>'Ingrese promedio','class'=>'form-control','required','id'=>'promedio']) !!}

             @if($errors->has('promedio'))
                 <div class="alert alert-warning" role="alert">
                       <p>El promedio que intenta ingresar no es valido</p>
                 </div>
            @endif 
		</div>
	</div>
</div>

<u><h4>Datos Familiares</h4></u>

<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('nPadre','Nombre completo del padre o tutor') !!}
            {!! Form::text ('nPadre',null,['placeholder'=>'Ingrese nombre completo del padre (Apellido Paterno, Apellido Materno, Nombre(s))','class'=>'form-control','required']) !!} 

               @if($errors->has('nPadre'))
                 <div class="alert alert-warning" role="alert">
                       <p>El nombre  que ingreso no es valido porque: </p>
                       <ul>
                          <li>El nombre ya existe</li> 
                      </ul>
                 </div>
                @endif 
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('nMadre','Nombre completo de la madre o tutora') !!}
          {!! Form::text ('nMadre',null,['placeholder'=>'Ingrese nombre completo de la madre (Apellido Paterno, Apellido Materno, Nombre(s))','class'=>'form-control','required']) !!}

           @if($errors->has('nMadre'))
                 <div class="alert alert-warning" role="alert">
                       <p>El nombre  que ingreso no es valido porque: </p>
                       <ul>
                          <li>El nombre ya existe</li> 
                      </ul>
                 </div>
           @endif 
			
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('telefono','Telefono') !!}
            {!! Form::tel ('telefono',null,['placeholder'=>'Ingrese un numero telefonico','class'=>'form-control','required','pattern=^[0-9]{10}']) !!}

           @if($errors->has('telefono'))
                 <div class="alert alert-warning" role="alert">
                       <p>El numero de telefono que ingreso no es valido porque: </p>
                       <ul>
                       	  <li>No es un numero</li>
                          <li>El numero debe ser igual a 10 digitos</li> 
                          <li>El numero ya existe</li>
                      </ul>
                 </div>
           @endif 
		</div>
	</div>
</div>
<br>
<p align="center">

{!! Form::submit('Guardar',['class'=>'btn btn-outline-info btn-block']) !!}
{!! Form::close() !!}

</p>

@include('comp_principales.pie_pag')