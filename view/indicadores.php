<head>
    <script src="include/tables/indicador.js"></script>
    <script src="include/js/comandos.js"></script>
</head>
<body>
    <div class="row wow fadeIn">
        <div class="col-md-12 mb-12">
            <div class="card mb-12">
                <div class="card-header text-left">
                    INDICADORES
                </div>
                    <div class="card-body">
                        <!-- <canvas id="pieChart"></canvas> -->
                        <form role="form" class="form-horizontal" id="addIndicador">
                            <div class="form-group row">
                                <label for="Cpregunta" class=" control-label">PREGUNTAS:</label> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <select name="Cpregunta" id="Cpregunta" class="form-control" ></select>
                                </div>

                                <label for="CCapacitaciones" class="control-label">CAPACITACIONES:</label> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <select name="CCapacitaciones" id="CCapacitaciones" class="form-control" ></select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cRespuesta" class="control-label">RESPUESTA:</label> 
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <textarea name="cRespuesta" id="cRespuesta" class="form-control" rows="3"  required="required"></textarea>
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
    <form  id="EPregunta">
        <div id="modalEditar" class="modal fade" role="dialog">
        <div class="modal-dialog ">  
            <div class="modal-content">
            <div class="modal-header">
                <h4>Preguntas</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                        <form role="form" class="form-horizontal">
                            <input type="hidden" name="idPregunta" id="idPregunta">
                            <div class="form-group row">
                                <label for="preguntaE" class=" col-sm-3 control-label">PREGUNTA:</label> 
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <input type="text" name="preguntaE" id="preguntaE" class="form-control" placeholder="Pregunta">
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

    <form  id="DPregunta">
        <div id="modalEliminar" class="modal fade" role="dialog">
        <div class="modal-dialog">  
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Elininar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                <input type="hidden" name="idPreguntaD" id="idPreguntaD" value="">
                    <div class="form-group">
                        ¿Está seguro de eliminar la pregunta?
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
                    <table class="table table-hover" id="tIndicador">
                        <thead>
                            <th>PREGUNTA</th>
                            <th>RESPUESTA</th>
                            <th>CAPACITACION</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>
<script>
$(document).ready(function(){
    addIndicador('#addIndicador');


    llenarCombos('model/php/combo_Preguntas.php','#Cpregunta','idPregunta','pregunta');
    llenarCombos('model/php/combo_Capacitacion.php','#CCapacitaciones','idCrolTema','descripcion');

   
})

</script>