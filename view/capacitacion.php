<head>
    <script src="include/tables/capacitacion.js"></script>
    <script src="include/js/comandos.js"></script>
</head>
<body>
    <div class="row wow fadeIn">
        <div class="col-md-12 mb-12">
            <div class="card mb-12">
                <div class="card-header text-left">
                    Listado de Capacitaciones
                </div>
                    <div class="card-body">
                        <!-- <canvas id="pieChart"></canvas> -->
                        <form role="form" class="form-horizontal" id="addCapacitacion">
                            <div class="form-group row">
                                <label for="nCapa" class=" col-sm-2 control-label">Descripción:</label> 
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <input type="text" name="nCapa" id="nCapa" class="form-control" placeholder="Nombre Capacitación">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                    <button type="submit" class="btn btn-primary">enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>

<div class="container">
    <form  id="ECapacitacion">
        <div id="modalEditar" class="modal fade" role="dialog">
        <div class="modal-dialog ">  
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <form class="form-horizontal" >
                <input type="hidden" class="form-control" id="idfood" name="idfood" value="">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="food">Nombre:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="food" name="food" placeholder="Nuevo Nombre">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default"  >Editar</button>
            </div>
            </div>
        </div>
        </div>
    </form>

    <form  id="DCapacitacion">
        <div id="modalEliminar" class="modal fade" role="dialog">
        <div class="modal-dialog">  
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Elininar Capacitación</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                <input type="hidden" name="idAlimento" id="idAlimento" value="">
                    <div class="form-group">
                        ¿Está seguro de eliminar la capacitación?
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" >Aceptar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
            </div>
        </div>
        </div>
    </form>
</div>
        <div class="col-lg-12 col-md-12 mb-12 tabla">
            <div class="card">
                <div class="card-header">Ingresadas</div>
                <div class="card-body">
                    <table class="table table-hover" id="tCapacitacion">
                        <thead>
                            <th>NOMBRE CAPACITACION</th>
                            <th>CONTROL</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
$(document).ready(function(){
    addCapacitacion('#addCapacitacion');
    editarCapacitacion('#ECapacitacion','view/capacitacion.php','#modalEditar');
    deleteCapacitacion('#DCapacitacion','view/capacitacion.php','#modalEliminar');
})
</script>