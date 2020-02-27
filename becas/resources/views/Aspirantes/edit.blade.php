@include ('comp_principales.encabezado')

@include('comp_principales.menu')
<br>
    <br>
        <h4 align="center">
            <strong>
                Editar Registro de Aspirante
            </strong>
        </h4>
        <br>
            <br>
                <div style="background-color: #F6F4F4">
                    {!! Form::open([ 'method' => 'PATCH' , 'url'=>'/aspirantes/'.$aspirantes->id]) !!}
                    <br>
                        <div class="form-group">
                            {!! Form::label ('n_folio','Numero de folio') !!}
          {!! Form::number ('n_folio',$aspirantes->n_folio,['placeholder'=>'Ingrese numero de folio','class'=>'form-control','min=0','required','pattern=^[0-9]+','disabled']) !!}
                        </div>
                        <u>
                            <h4>
                                Datos del estudiante
                            </h4>
                        </u>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label ('aPaterno','Apellido Paterno') !!}
            {!! Form::text ('aPaterno',$aspirantes->aPaterno,['placeholder'=>'Ingrese apellido paterno','class'=>'form-control','pattern'=>'[A-Za-z] {1-50}']) !!}
             @if($errors->has('aPaterno'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('aPaterno') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label ('aMaterno','Apellido Materno') !!}
            {!! Form::text ('aMaterno',$aspirantes->aMaterno,['placeholder'=>'Ingrese apellido paterno','class'=>'form-control']) !!}
            @if($errors->has('aMaterno'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('aMaterno') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label ('nombre','Nombre') !!}
            {!! Form::text ('nombre',$aspirantes->nombre,['placeholder'=>'Ingrese nombre(s)','class'=>'form-control']) !!}
             @if($errors->has('nombre'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('nombre') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <u>
                            <h4>
                                Direccion
                            </h4>
                        </u>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label ('calle','Calle') !!}
            {!! Form::text ('calle',$aspirantes->calle,['placeholder'=>'Ingrese calle','class'=>'form-control']) !!}
             @if($errors->has('calle'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('calle') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label ('numero','Numero') !!}
            {!! Form::text ('numero',$aspirantes->numero,['placeholder'=>'Ingrese numero','class'=>'form-control']) !!}
            @if($errors->has('numero'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('numero') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label ('id_Barrio','Barrio') !!}
            {!! Form::select ('id_Barrio', $barrio->pluck('nombre','id')->all(),$aspirantes->id_Barrio,['placeholder'=>'--Seleccionar--','class'=>'form-control']) !!}
            @if($errors->has('id_Barrio'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('id_Barrio') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <u>
                            <h4>
                                Nivel Educativo
                            </h4>
                        </u>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label ('id_Escuela','Nombre de la Escuela') !!}
             {!! Form::select ('id_Escuela',$escuela->pluck('nombre_esc','id')->all(),$aspirantes->id_Escuela,['placeholder'=>'--Seleccionar--','class'=>'form-control']) !!}
             @if($errors->has('id_Escuela'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('id_Escuela') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label ('niv_educativo','Nivel Educativo') !!}
      {{ Form::select('niv_educativo',$nivel->pluck('nombreNiv','id')->all(), $aspirantes->niv_educativo, ['class' => 'form-control','placeholder'=>'--Seleccionar--']) }}
      @if($errors->has('niv_educativo'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('niv_educativo') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label ('grado','Grado') !!}
        {{ Form::select('grado',['Primero' => 'Primero', 'Segundo' => 'Segundo', 'Tercero' => 'Tercero','Cuarto' => 'Cuarto','Quinto' => 'Quinto', 'Sexto' => 'Sexto'], $aspirantes->grado, ['class' => 'form-control','placeholder'=>'--Seleccionar--']) }}
        @if($errors->has('grado'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('grado') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    {!! Form::label ('promedio','Promedio') !!}
            {!! Form::text ('promedio',$aspirantes->promedio,['placeholder'=>'Ingrese promedio','class'=>'form-control']) !!}
            @if($errors->has('promedio'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('promedio') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <u>
                            <h4>
                                Datos Familiares
                            </h4>
                        </u>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label ('nPadre','Nombre completo del padre o tutor') !!}
            {!! Form::text ('nPadre',$aspirantes->nPadre,['placeholder'=>'Apellido Paterno, Apellido Materno, Nombre','class'=>'form-control']) !!}
            @if($errors->has('nPadre'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('nPadre') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label ('nMadre','Nombre completo de la madre o tutora') !!}
          {!! Form::text ('nMadre',$aspirantes->nMadre,['placeholder'=>'Apellido Paterno, Apellido Materno, Nombre','class'=>'form-control']) !!}
          @if($errors->has('nMadre'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('nMadre') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    {!! Form::label ('telefono','Telefono') !!}
            {!! Form::tel ('telefono',$aspirantes->telefono,['placeholder'=>'Ingrese un numero telefonico','class'=>'form-control']) !!}
            @if($errors->has('telefono'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $errors->first('telefono') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <br>
                            <p align="center">
                            </p>
                        </br>
                    </br>
                </div>
                {!! Form::submit('Guardar',['class'=>'btn btn-info btn-block']) !!}
{!! Form::close() !!}
            </br>
        </br>
    </br>
</br>
@include('comp_principales.pie_pag')
