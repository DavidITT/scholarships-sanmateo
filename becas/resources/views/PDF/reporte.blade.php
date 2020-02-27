<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <link href="{!! asset('logo.png') !!}" rel="icon" type="image/x-icon">
                <title>
                    Reporte
                </title>
            </link>
        </meta>
    </head>
    <body>
        <p align="center">
            <img align="center" height="60" src="{!! asset('adelante.png') !!}" width="700px"/>
        </p>
        <br/>
        <h2 align="center">
            <strong>
                <u>
                    Reporte de Aspirantes
                </u>
            </strong>
        </h2>
        <br>
            <p>
                <b>
                    Fecha de emisión:
                </b>
                <?=  $date; ?>
                <br>
                    <b>
                        Nota:
                    </b>
                    El siguiente reporte muestra informacion reelevante de todos los aspirantes a la beca
                </br>
            </p>
            <br>
                {{ $data }}
                <div>
                    <div>
                        <table align="center" border="1" cellpadding="5" cellspacing="0" height="50%" width="100%">
                            <thead>
                                <tr style="color: white; background-color: black">
                                    <th align="center">
                                        Folio
                                    </th>
                                    <th align="center">
                                        Nombre
                                    </th>
                                    <th align="center">
                                        Escuela
                                    </th>
                                    <th align="center">
                                        Grado
                                    </th>
                                    <th align="center">
                                        Promedio
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data as $beca){ ?>
                                <tr>
                                    <td align="center">
                                        <?=  $beca->
                                        n_folio; ?>
                                    </td>
                                    <td align="center">
                                        <?=  $beca->
                                        aPaterno." ".$beca->aMaterno." ".$beca->nombre ?>
                                    </td>
                                    <td align="center">
                                        <?=  $beca->
                                        escuela->nombre_esc; ?>
                                    </td>
                                    <td align="center">
                                        <?=  $beca->
                                        grado; ?>
                                    </td>
                                    <td align="center">
                                        <?=  $beca->
                                        promedio; ?>
                                    </td>
                                </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <br/>
                <br/>
                <footer>
                    <p align="center">
                        <img height="200px" src="{!! asset ('images/abajologo.png') !!}" width="100%">
                        </img>
                    </p>
                </footer>
            </br>
        </br>
    </body>
</html>
