@include ('comp_principales.encabezado')

@include('comp_principales.menu')
<br>
    <br>
        <h4 align="center">
            <strong>
                Escuelas Registradas
            </strong>
        </h4>
        <br>
            <p align="center">
                <button class="btn btn-danger" onclick="window.location.href = 'escuelas/create'" type="button">
                    <i class="fas fa-plus-circle">
                    </i>
                    Nuevo Registro
                </button>
            </p>
            <div class="form-group">
                <p>
                    Bucar:
                    <input class="form-control form-control-md" id="search" placeholder="Busqueda..." style="width:100%" type="text"/>
                </p>
            </div>
            <br>
                <table class="table-hover table-responsive-x" id="tablabusqueda" style="width:100%">
                    <thead style="background-color: #D5DBDB">
                        <tr align="center">
                            <th>
                                Matricula
                            </th>
                            <th>
                                Nombre de Escuela
                            </th>
                            <th>
                                Nivel Educativo
                            </th>
                            <th>
                                Direccion
                            </th>
                            <th>
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($escuelas as $es)
                        <tr align="center">
                            <th>
                                {!! $es->matricula !!}
                            </th>
                            <th>
                                {!! $es->nombre_esc !!}
                            </th>
                            <th>
                                {!! $es->nivel->nombreNiv!!}
                            </th>
                            <th>
                                {!! $es->direccion!!}
                            </th>
                            <th>
                                <a href="{!! 'escuelas/'.$es->id.'/edit'  !!}">
                                    <button class="btn btn-sm btn-outline-success">
                                        <i class="fas fa-eye-dropper">
                                        </i>
                                    </button>
                                    {!! Form::open(['method' => 'DELETE' , 'url' => '/escuelas/'.$es->id]) !!}
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash">
                                        </i>
                                    </button>
                                    {!! Form::close() !!}
                                </a>
                            </th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @include('comp_principales.pie_pag')
            </br>
        </br>
    </br>
</br>