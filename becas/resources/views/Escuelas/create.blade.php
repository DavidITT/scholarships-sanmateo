
@include ('comp_principales.encabezado')

@include('comp_principales.menu')
<br>
<br>
<h4 align="center"><strong>Registro de Aspirante</strong></h4>
<br>

{!! Form::open(['url'=>'/escuelas', 'method'=>'POST']) !!}
<div class="form-group">
          {!! Form::label ('nombre_esc','Nombre de la escuela') !!}
          {!! Form::text ('nombre_esc',null,['placeholder'=>'Ingrese nombre de la escuela','class'=>'form-control']) !!}
           
           @if($errors->has('nombre_esc'))
                 <div class="alert alert-danger" role="alert">
                       {{ $errors->first('nombre_esc') }}
                 </div>
           @endif   
</div>
<div class="form-group">
          {!! Form::label ('id_nivel','Nombre del nivel') !!}
          {!! Form::select ('id_nivel',$nivel->pluck('nombreNiv','id')->all(),null,['placeholder'=>'--Seleccionar--','class'=>'form-control']) !!}
           
           @if($errors->has('id_nivel'))
                 <div class="alert alert-danger" role="alert">
                       {{ $errors->first('id_nivel') }}
                 </div>
           @endif   
</div>
{!! Form::submit('Guardar',['class'=>'btn btn-info btn-block']) !!}
{!! Form::close() !!}

@include('comp_principales.pie_pag')