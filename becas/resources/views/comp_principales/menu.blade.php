<div class="container">
	<div class="jumpbotron">
		<div class="row">
			<div class="col-sm-1"></div>

			<div class="col-sm-4">
				<img src="{!! asset ('images/logo.png') !!}" height="150px" width="100%">

			</div>
			<div class="col-sm-5">
				<img src="{!! asset ('images/adelante.png') !!}" height="150px" width="100%">
			</div>

			<div class="col-sm-2"></div>
		</div>
	</div>
</div>
<br>
<div class="container" style="background-color: white">
	<div class="jumpbotron" >
		<nav class="navbar navbar-expand-sm bg-light navbar-light navbar-collapse" align="center">
			<ul class="navbar-nav"><a class="navbar-brand" href="principal">
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
				<a class="navbar-brand" href="{!! asset ('principal') !!}">
					<img src="{!! asset ('images/logo.png') !!}"  style="width:40px;" >
				</a>
				&nbsp; &nbsp; &nbsp; &nbsp; 
				<li class="nav-item">
					<a class="nav-link" href="{!! asset ('aspirantes/create') !!}">Registro</a>
				</li>
				&nbsp; &nbsp; &nbsp; &nbsp; 
				<li class="nav-item">
					<a class="nav-link" href="{!! asset ('aspirantes') !!}">Ver</a>
				</li>
				&nbsp; &nbsp; &nbsp; &nbsp; 
				<li class="nav-item">
					<a class="nav-link" href="{!! asset ('principal_pdf') !!}">Reportes</a>
				</li>
				&nbsp; &nbsp; &nbsp; &nbsp; 
				<li class="nav-item">
					<a class="nav-link" href="{!! asset ('escuelas') !!}">Escuelas</a>
				</li>
				&nbsp; &nbsp; &nbsp; &nbsp; 
				<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
			</ul>
		</nav>
	</div>
