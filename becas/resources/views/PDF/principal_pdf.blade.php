
@extends ('principal.principal_master')

@section('contenido_principal')
            <br>
			<h4 align="center"><strong>Apartado de Reporte</strong></h4>
			<br>
                <div class="alert alert-danger alert-dismissible">
                     <button type="button" class="close" data-dismiss="alert">&times;</button>
                     <strong><i class="fas fa-exclamation-triangle" style="size:7"></i> ¡Precaución!</strong> La informacion contenida en este apartado no debe ser compartida ni mucho menos utilizada para fines maliciosos ni lucrativos, de no ser asi se informara a las autoridades correspondientes.
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table class="table" style="color: black" width="50%"  align="center"  bgcolor="white">
                                <thead style="background-color: #F5F5F5">
                                    <tr  align="center">
                                        <th colspan="3">Reporte</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        
                                        <td align="center">Aspirantes Seleccionados</td>
                                        <td align="center">
                                            <a href="{!! asset('crear_reporte_becas/1') !!}" target="_blank" ><button class="btn-sm btn btn btn-dark" style="color: white" ><i class="far fa-eye"></i> Ver</button></a>
                                        </td>
                                        <td align="center">
                                            <a href="{!! asset('crear_reporte_becas/2') !!}" target="_blank" ><button class="btn-sm btn btn-danger"><i class="fas fa-file-download"></i> Descargar</button></a>
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

