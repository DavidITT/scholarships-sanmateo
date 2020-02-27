+<!DOCTYPE html>
<html>
    <head>
        <title>
            Becas 2020
        </title>
        <meta charset="utf-8">
            <link href="{!! asset ('images/logo.png') !!}" rel="icon" type="text/css">
                <link href=" {!! asset ('css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css">
                    <link href=" {!! asset ('css/bootstrap.css') !!}" rel="stylesheet" type="text/css">
                        <script href=" {!! asset ('js/jquery.js') !!}" type="text/javascript">
                        </script>
                        <script href=" {!! asset ('js/bootstrap.min.js') !!}" type="text/javascript">
                        </script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
                        </script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
                        </script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
                        </script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
                        </script>
                    </link>
                </link>
            </link>
        </meta>
    </head>
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/f7a229cef3.js">
    </script>
</html>
<body>
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
            <br>
                <br>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        Mensaje
                                    </div>
                                    <br>
                                        <div class="alert alert-danger">
                                            <h6>
                                                {!! $msj !!}
                                            </h6>
                                            <br>
                                            </br>
                                        </div>
                                        <a class="btn btn-outline-dark btn-sm" href="{!! asset('principal') !!}">
                                            Aceptar
                                        </a>
                                    </br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer>
                        <img height="200px" src="{!! asset ('images/abajologo.png') !!}" width="100%">
                        </img>
                    </footer>
                </br>
            </br>
        </div>
    </div>
    </div>
</body>