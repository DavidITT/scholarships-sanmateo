<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link rel="icon" href="{!! asset('logo.png') !!}" type="image/x-icon"> 
	<title>Reporte</title>
</head>
<body>

<p align="center"><img src="{!! asset('adelante.png') !!}" width="700px" height="60" align="center"></p>
<br/>



<h2 align="center"> <strong><u>Reporte de Aspirantes</u></strong></h2>
<br>
<p><b>Fecha de emisión:</b> <?=  $date; ?> <br><b>Nota:</b> El siguiente reporte muestra informacion reelevante de todos los aspirantes a la beca</p>
<br>
{{ $data }}
       <div>
            <div>
                  <table border="1" align="center" cellspacing="0" cellpadding="5" width="100%" height="50%">
                  <thead>
                     <tr style="color: white; background-color: black">
                     
                      <th align="center">Folio</th>
                      <th align="center">Nombre</th>
                      <th align="center">Escuela</th>
                      <th align="center">Grado</th>
                      <th align="center">Promedio</th>

                    </tr>
                  </thead>
                    <tbody>
                  <?php foreach($data as $beca){ ?>
                 
                    <tr>
                      
                      <td align="center"><?=  $beca->n_folio; ?></td>
                      <td align="center"><?=  $beca->aPaterno." ".$beca->aMaterno." ".$beca->nombre ?></td>      
                      <td align="center"><?=  $beca->escuela->nombre_esc; ?></td>  
                      <td align="center"><?=  $beca->grado; ?></td>
                      <td align="center"><?=  $beca->promedio; ?></td>
                      
                    </tr>
                    
                    <?php  } ?>
                  </tbody>
                  </table>
           </div>
     </div> 
    <br/>
    <br/>

    <footer>
     <p align="center"><img src="{!! asset ('images/abajologo.png') !!}" height="200px" width="100%">
     </p> 
    </footer>
          
</body>
</html>
