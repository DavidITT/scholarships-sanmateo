
@include ('comp_principales.encabezado')

@include('comp_principales.menu')
<br>
<br>
<h4 align="center"><strong>Editar datos de Escuela</strong></h4>
<br>
<div style="background-color: #F6F4F4">
<br>
{!! Form::open([ 'method' => 'PATCH' , 'url'=>'/escuelas/'.$escuelas->id]) !!}
<div class="form-group">
          {!! Form::label ('nombre_esc','Nombre de la escuela') !!}
          {!! Form::text ('nombre_esc',$escuelas->nombre_esc,['placeholder'=>'Ingrese nombre de la escuela','class'=>'form-control']) !!}
           
           @if($errors->has('nombre_esc'))
                 <div class="alert alert-danger" role="alert">
                       {{ $errors->first('nombre_esc') }}
                 </div>
           @endif   
</div>
<div class="form-group">
          {!! Form::label ('matricula','Matricula la escuela') !!}
          {!! Form::text ('matricula',$escuelas->matricula,['placeholder'=>'Ingrese matricula de la escuela','class'=>'form-control']) !!}
           
           @if($errors->has('matricula'))
                 <div class="alert alert-danger" role="alert">
                       {{ $errors->first('matricula') }}
                 </div>
           @endif   
</div>
<div class="form-group">
          {!! Form::label ('id_nivel','Nombre del nivel') !!}
          {!! Form::select ('id_nivel',$nivel->pluck('nombreNiv','id')->all(),$escuelas->id_nivel,['placeholder'=>'--Seleccionar--','class'=>'form-control']) !!}
           
           @if($errors->has('id_nivel'))
                 <div class="alert alert-danger" role="alert">
                       {{ $errors->first('id_nivel') }}
                 </div>
           @endif   
</div>
<div class="form-group">
          {!! Form::label ('direccion','Direccion de la escuela') !!}
          {!! Form::text ('direccion',$escuelas->direccion,['placeholder'=>'Ingrese direccion de la escuela','class'=>'form-control']) !!}
           
           @if($errors->has('direccion'))
                 <div class="alert alert-danger" role="alert">
                       {{ $errors->first('direccion') }}
                 </div>
           @endif   
</div>
{!! Form::submit('Guardar',['class'=>'btn btn-info btn-block']) !!}
{!! Form::close() !!}

@include('comp_principales.pie_pag')