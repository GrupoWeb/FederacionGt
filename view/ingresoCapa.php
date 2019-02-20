<head>
    <script src="include/tables/adjuntoCapa.js"></script>
</head>
<body>
    <div class="row wow fadeIn">
        <div class="col-md-12 mb-12">
            <div class="card mb-12">
                <div class="card-header text-left">
                    INGRESO DE CAPACITACIONES
                </div>
                    <div class="card-body">
                        <!-- <canvas id="pieChart"></canvas> -->
                        <form role="form"  class="form-horizontal" id="adjunto" >
                            <div class="form-group row">
                                <label for="Ccapacitacion" class=" control-label">CAPACITACIONES:</label> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <select name="Ccapacitacion" id="Ccapacitacion" class="form-control" ></select>
                                </div>

                                <label for="Ccapacitador" class="control-label">CAPACITADORES:</label> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <select name="Ccapacitador" id="Ccapacitador" class="form-control" ></select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Ccantidad" class="control-label">CANTIDAD ASISTENCIA:</label> 
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                    <input type="text" name="Ccantidad" id="Ccantidad" class="form-control" placeholder="#">
                                </div>

                                <label for="Cmujeres" class="control-label">MUJERES:</label> 
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                    <input type="text" name="Cmujeres" id="Cmujeres" class="form-control" placeholder="#">
                                </div>

                                <label for="Chombres" class="control-label">HOMBRES:</label> 
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                    <input type="text" name="Chombres" id="Chombres" class="form-control" placeholder="#">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Cfecha" class="control-label">FECHA:</label> 
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <input type="text" data-field="date" name="Cfecha" id="Cfecha" class="form-control" >
                                    <div id="dtBox"></div>
                                </div>

                                <label for="ChoraI" class="control-label">HORA INICIAL:</label> 
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                    <input type="text"  data-field="time" name="ChoraI" id="ChoraI" class="form-control" >
                                </div>

                                <label for="ChoraF" class="control-label">HORA FINAL:</label> 
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                    <input type="text"  data-field="time" name="ChoraF" id="ChoraF" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="Cobservacion" class="control-label">OBSERVACION:</label> 
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <textarea name="Cobservacion" id="Cobservacion" class="form-control" rows="3"  required="required"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 panel panel-primary">
                                <div class="card-header text-left panel-heading info">
                                    
                                        Datos Adjuntos
                                   
                                </div>
                                <div class="card-body">
                                    
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="label">
                                                    Titulo:
                                                </label>
                                                <input type="text" id="uploadtitle" name ="uploadtitle" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="form-div">
                                                <label for="file" class="input-label">
                                                    <i class="fa fa-upload fas"></i>
                                                    <span id="label_span">Seleccione Archivo</span>
                                                </label>
                                                <input type="file" id="file"  name ="file"  />
                                               
                                        </div>
                                    
                                </div>
                            </div>
                            </div>


                            <div class="form-group  row">
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
                    <table class="table table-hover" id="tAdjunto">
                        <thead>
                            <th>CAPACITACION</th>
                            <th>CAPACITADOR</th>
                            <th>ASISTENTES</th>
                            <th># MUJERES</th>
                            <th># HOMBRES</th>
                            <th>ADJUNTO</th>
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
    addAdjunto('#adjunto');
    //editarPregunta('#EPregunta','view/preguntas.php','#modalEditar');
    //deletePregunta('#DPregunta','view/preguntas.php','#modalEliminar');
    llenarCombos('model/php/comboCapacitaciones.php','#Ccapacitacion','idCapacitacion','descripcion')
    llenarCombos('model/php/combocapacitador.php','#Ccapacitador','idProl','NOMBRE');
    $("#dtBox").DateTimePicker();
    $("#fecha").blur(function(){
        CalcularEdad(this.id);
    });
   
})
</script>