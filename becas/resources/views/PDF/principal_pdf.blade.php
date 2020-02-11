
@extends ('principal.principal_master')

@section('contenido_principal')

			<br>
			<br>
               <h2 align="center"><strong> Reporte</strong></h2>
            
             <br> 
             <br>
			
        
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table class="table" style="color: black" width="50%" border="3" align="center" cellspacing="0" bordercolor="#000000" bgcolor="white">
                                <thead style="background-color: #D5DBDB">
                                    <tr  align="center">
                                        <th>Reporte</th>
                                        <th>Ver Reporte</th>
                                        <th>Descargar Reporte</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        
                                        <td align="center">Reporte de Aspirantes</td>
                                        <td align="center">
                                            <a href="{!! asset('crear_reporte_becas/1') !!}" target="_blank" ><button class="btn btn-warning" style="color: white" >Ver</button></a>
                                        </td>
                                        <td align="center">
                                            <a href="{!! asset('crear_reporte_becas/2') !!}" target="_blank" ><button class="btn btn-info">Descargar</button></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        
    @endsection()

