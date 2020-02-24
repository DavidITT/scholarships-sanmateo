
@include ('comp_principales.encabezado')

@include('comp_principales.menu')
<br>
<br>
<h2 align="center"><strong> Nueva Escuela </strong></h2>
<br>
<br>  

{!! Form::open(['url'=>'/escuelas', 'method'=>'POST']) !!}

<div class="form-group">
          {!! Form::label ('nombre_escuela','Nombre de la escuela') !!}
          {!! Form::text ('nombre_escuela',null,['placeholder'=>'Ingrese el nombre de la escuela','class'=>'form-control']) !!}

          {!! Form::label ('niv_educativo','Nivel Educativo') !!}
			{{ Form::select('niv_educativo',$nivel->pluck('nombreNivel','id')->all(), null, ['class' => 'form-control','placeholder'=>'--Seleccionar--']) }}

			<br>

			{!! Form::submit('Guardar',['class'=>'btn btn-outline-info btn-block']) !!}
            {!! Form::close() !!}
           
</div>

@include('comp_principales.pie_pag')