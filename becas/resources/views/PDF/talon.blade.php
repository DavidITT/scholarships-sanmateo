<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" href="{!! asset('logo.png') !!}" type="image/x-icon"> 
 <title>Datos de Aspirante</title>
  <style>
       table, th, td {
       border: 1px solid black;
       border-collapse: collapse;
       }
       th, td {
       padding: 5px;
       border-top: 0px;
       border-right: 0px;
       border-bottom: 1px solid black;
       border-left: 0px;
       }
</style>

  <title>Reporte</title>
</head>
<body>

<p align="center"><img src="{!! asset('adelante.png') !!}" width="700px" height="60" align="center"></p>
<hr></hr>
<br>
<h4 align="center">H.Ayuntamiento de San Mateo Atenco<br>
Direccion de Educación</h4>
<br>
<br>
<table style="width:100%">
  <tr border="1" cellspacing="0">
    <th colspan="2" align="center" height="20">Datos Personales del Aspirante</th>
  </tr>
  <tr>
    <td align="right" width="50%">Folio:</td>
    <td width="50%">{!!$data->n_folio!!}</td>
  </tr>
  <tr>
    <td align="right" width="50%">Nombre:</td>
    <td width="50%">{!!$data->aPaterno." ".$data->aMaterno." ".$data->nombre !!}</td>
  </tr>
  <tr>
    <td align="right" width="50%">Dirección:</td>
    <td width="50%">{!!$data->calle." ".$data->numero." ,".$data->barrio->nombre !!}</td>
  </tr>
  <tr>
    <td align="right" width="50%">Escuela:</td>
    <td width="50%">{!!$data->escuela->nombre_escuela!!}</td>
  </tr>
  <tr>
    <td align="right" width="50%">Grado:</td>
    <td width="50%">{!!$data->grado!!}</td>
  </tr>
  <tr>
    <td align="right" width="50%">Promedio:</td>
    <td width="50%">{!!$data->promedio!!}</td>
  </tr>
  <tr>
    <td align="right" width="50%">Telefono:</td>
    <td width="50%">{!!$data->telefono!!}</td>
  </tr>
</table>
<br>
<br>
<p align="center">_______________________________________</p>
<p align="center"> Nombre y firma del padre o tutor</p>
<br>
     <p align="center"><img src="{!! asset ('images/abajologo.png') !!}" height="100px" width="100%">
     </p> 
 
<p>----------------------------------------------------------------------------------------------------------------------------------------</p>
<p align="center"><img src="{!! asset('adelante.png') !!}" width="60%" height="40px" align="center"></p>
<p><strong>Numero de Folio:</strong> {!!$data->n_folio!!} <br>
 <strong>Nombre del aspirante:</strong> {!!$data->aPaterno." ".$data->aMaterno." ".$data->nombre !!} <br><br>
<strong>Nota:</strong> Conserve este talon hasta el dia de los resultados que se publicaran por medios oficiales del municipio</p>

          
</body>


</html>
