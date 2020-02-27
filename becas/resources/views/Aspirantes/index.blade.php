@include ('comp_principales.encabezado')

@include('comp_principales.menu')
<br>
    <br>
        <h4 align="center">
            <strong>
                Becas Registradas
            </strong>
        </h4>
        <br>
            <p align="center">
                <button class="btn btn-danger" onclick="window.location.href = 'aspirantes/create'" type="button">
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
                                Folio
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Dirección
                            </th>
                            <th>
                                Barrio
                            </th>
                            <th>
                                Telefono
                            </th>
                            <th>
                                Promedio
                            </th>
                            <th>
                                Escuela
                            </th>
                            <th>
                                N.Padre
                            </th>
                            <th>
                                N.Madre
                            </th>
                            <th>
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($aspirantes as $as)
                        <tr align="center">
                            <th>
                                {!! $as->n_folio !!}
                            </th>
                            <th>
                                {!! $as->aPaterno." ".$as->aMaterno." ".$as->nombre !!}
                            </th>
                            <th>
                                {!! $as->calle."  #".$as->numero !!}
                            </th>
                            <td>
                                {!! $as->barrio->nombre !!}
                            </td>
                            <th>
                                {!! $as->telefono !!}
                            </th>
                            <th>
                                {!! $as->promedio !!}
                            </th>
                            <th>
                                {!! $as->escuela->nombre_escuela !!}
                            </th>
                            <th>
                                {!! $as->nPadre !!}
                            </th>
                            <th>
                                {!! $as->nMadre !!}
                            </th>
                            <th>
                                <a href="{!! 'aspirantes/'.$as->id.'/edit'  !!}">
                                    <button class="btn btn-sm btn-outline-success">
                                        <i class="fas fa-eye-dropper">
                                        </i>
                                    </button>
                                    {!! Form::open(['method' => 'DELETE' , 'url' => '/aspirantes/'.$as->id]) !!}
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash">
                                        </i>
                                    </button>
                                    {!! Form::close() !!}
                                    <a href="{!! asset('crear_talon_aspirante/'.$as->id) !!}" target="_blank">
                                        <button class="btn btn-sm btn-outline-info">
                                            <i class="fas fa-print">
                                            </i>
                                        </button>
                                    </a>
                                </a>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </br>
        </br>
    </br>
</br>
@endforeach
@include('comp_principales.pie_pag')
