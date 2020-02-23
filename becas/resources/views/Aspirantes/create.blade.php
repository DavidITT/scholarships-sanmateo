
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
          {!! Form::number ('n_folio',null,['placeholder'=>'Ingrese numero de folio','class'=>'form-control']) !!}
           
           @if($errors->has('n_folio'))
                 <div class="alert alert-warning" role="alert">
                       {{ $errors->first('n_folio') }}
                 </div>
           @endif   
</div>
<u><h4>Datos del estudiante</h4></u>
<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('aPaterno','Apellido Paterno') !!}
            {!! Form::text ('aPaterno',null,['placeholder'=>'Ingrese apellido paterno','class'=>'form-control']) !!}
             @if($errors->has('aPaterno'))
                 <div class="alert alert-warning" role="alert">
                       {{ $errors->first('aPaterno') }}
                 </div>
           @endif  
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('aMaterno','Apellido Materno') !!}
            {!! Form::text ('aMaterno',null,['placeholder'=>'Ingrese apellido paterno','class'=>'form-control']) !!}
            @if($errors->has('aMaterno'))
                 <div class="alert alert-warning" role="alert">
                       {{ $errors->first('aMaterno') }}
                 </div>
           @endif
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('nombre','Nombre') !!}
            {!! Form::text ('nombre',null,['placeholder'=>'Ingrese nombre(s)','class'=>'form-control']) !!}
            @if($errors->has('nombre'))
                 <div class="alert alert-warning" role="alert">
                       {{ $errors->first('nombre') }}
                 </div>
           @endif
		</div>
	</div>
</div>

<u><h4>Direccion</h4></u>

<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('calle','Calle') !!}
            {!! Form::text ('calle',null,['placeholder'=>'Ingrese calle','class'=>'form-control']) !!}
            @if($errors->has('calle'))
                 <div class="alert alert-warning" role="alert">
                       {{ $errors->first('calle') }}
                 </div>
           @endif
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('numero','Numero') !!}
            {!! Form::text ('numero',null,['placeholder'=>'Ingrese numero','class'=>'form-control']) !!}
             @if($errors->has('numero'))
                 <div class="alert alert-warning" role="alert">
                       {{ $errors->first('numero') }}
                 </div>
           @endif
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('id_Barrio','Barrio') !!}
            {!! Form::select ('id_Barrio', $barrio->pluck('nombre','id')->all(),null,['placeholder'=>'--Seleccionar--','class'=>'form-control']) !!}
             @if($errors->has('id_Barrio'))
                 <div class="alert alert-warning" role="alert">
                       {{ $errors->first('id_Barrio') }}
                 </div>
           @endif
		</div>
	</div>
</div>

<u><h4>Nivel Educativo</h4></u>

<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			 {!! Form::label ('id_Escuela','Nombre de la Escuela') !!}
             {!! Form::select ('id_Escuela',$escuela->pluck('nombre_escuela','id')->all(),null,['placeholder'=>'--Seleccionar--','class'=>'form-control']) !!}
             @if($errors->has('id_Escuela'))
                 <div class="alert alert-warning" role="alert">
                       {{ $errors->first('id_Escuela') }}
                 </div>
           @endif
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label ('niv_educativo','Nivel Educativo') !!}
			{{ Form::select('niv_educativo',$nivel->pluck('nombreNivel','id')->all(), null, ['class' => 'form-control','placeholder'=>'--Seleccionar--']) }}
			@if($errors->has('niv_educativo'))
                 <div class="alert alert-warning" role="alert">
                       {{ $errors->first('niv_educativo') }}
                 </div>
           @endif
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label ('grado','Grado') !!}
		    {{ Form::select('grado',['Primero' => 'Primero', 'Segundo' => 'Segundo', 'Tercero' => 'Tercero','Cuarto' => 'Cuarto','Quinto' => 'Quinto', 'Sexto' => 'Sexto'], null, ['class' => 'form-control','placeholder'=>'--Seleccionar--']) }}
		    @if($errors->has('grado'))
                 <div class="alert alert-warning" role="alert">
                       {{ $errors->first('grado') }}
                 </div>
           @endif
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			{!! Form::label ('promedio','Promedio') !!}
            {!! Form::text ('promedio',null,['placeholder'=>'Ingrese promedio','class'=>'form-control']) !!}

             @if($errors->has('promedio'))
                 <div class="alert alert-warning" role="alert">
                       {{ $errors->first('promedio') }}
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
            {!! Form::text ('nPadre',null,['placeholder'=>'Ingrese nombre completo del padre Apellido Paterno, Apellido Materno, Nombre(s)','class'=>'form-control']) !!} 
            @if($errors->has('nPadre'))
                 <div class="alert alert-warning" role="alert">
                       {{ $errors->first('nPadre') }}
                 </div>
           @endif 
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('nMadre','Nombre completo de la madre o tutora') !!}
          {!! Form::text ('nMadre',null,['placeholder'=>'Ingrese nombre completo de la madre Apellido Paterno, Apellido Materno, Nombre(s)','class'=>'form-control']) !!}

           @if($errors->has('nMadre'))
                 <div class="alert alert-warning" role="alert">
                       {{ $errors->first('nMadre') }}
                 </div>
           @endif
			
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			{!! Form::label ('telefono','Telefono') !!}
            {!! Form::tel ('telefono',null,['placeholder'=>'Ingrese un numero telefonico','class'=>'form-control']) !!}

           @if($errors->has('telefono'))
                 <div class="alert alert-warning" role="alert">
                       {{ $errors->first('telefono') }}
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