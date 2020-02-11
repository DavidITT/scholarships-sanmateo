<!DOCTYPE html>
<html>
<head>
	<title>Becas 2019</title>
	<meta charset="utf-8">
	<link rel="icon" type="text/css" href="{!! asset ('images/logo.png') !!}">
	<link rel="stylesheet" type="text/css" href=" {!! asset ('css/bootstrap.min.css') !!}">
	<script type="text/javascript" href=" {!! asset ('js/jquery.js') !!}"></script>
	<script type="text/javascript"  href=" {!! asset ('js/bootstrap.min.js') !!}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body >

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
	
   <br>
   <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: black; color: white">Mensaje</div>

                <div class="card-body" style="background-color: #F4F6F6  ">
                            
                           <div class="alert alert-danger">
                                <h4><strong>Error 404:</strong></h4>
                                	<br>
                                	<br> 
                                    <p><u>Descripción:</u> La pagina que esta solicitando no existe o no se encuentra</p> 
                                    <br>
                                    <br>
                            </div>
                            <a class="btn btn-outline-dark" href="{!! asset('principal') !!}">Aceptar</a>
                            
                </div>
            </div>
        </div>
    </div>

    <br>

<footer>
	<img src="{!! asset ('images/abajologo.png') !!}" height="200px" width="100%">
</footer>

</div>



</body>
</html>

