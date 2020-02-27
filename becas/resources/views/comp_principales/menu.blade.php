<div class="container">
    <div class="jumpbotron">
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-4">
                <img height="150px" src="{!! asset ('images/logo.png') !!}" width="100%">
                </img>
            </div>
            <div class="col-sm-5">
                <img height="150px" src="{!! asset ('images/adelante.png') !!}" width="100%">
                </img>
            </div>
            <div class="col-sm-2">
            </div>
        </div>
    </div>
</div>
<br>
    <div class="container" style="background-color: white">
        <div class="jumpbotron">
            <nav align="center" class="navbar navbar-expand-sm bg-light navbar-light navbar-collapse">
                <ul class="navbar-nav">
                    <a class="navbar-brand" href="principal">
                        <a class="navbar-brand" href="{!! asset ('principal') !!}">
                            <img src="{!! asset ('images/logo.png') !!}" style="width:40px;">
                            </img>
                        </a>
                        <li class="nav-item">
                            <a class="nav-link" href="{!! asset ('aspirantes/create') !!}">
                                Registro
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{!! asset ('aspirantes') !!}">
                                Ver
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{!! asset ('principal_pdf') !!}">
                                Reportes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{!! asset ('escuelas') !!}">
                                Escuelas
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button" v-pre="">
                                {{ Auth::user()->name }}
                                <span class="caret">
                                </span>
                            </a>
                            <div aria-labelledby="navbarDropdown" class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>
                                <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </a>
                </ul>
            </nav>
        </div>
    </div>
</br>