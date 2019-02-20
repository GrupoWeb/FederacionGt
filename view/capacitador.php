<head>
    <script src="include/tables/capacitadores.js"></script>
    <script src="include/tables/Rpersona.js"></script>
    <script src="include/js/comandos.js"></script>
</head>
<body>
    <div class="row wow fadeIn">
        <div class="col-md-12 mb-12">
            <div class="card mb-12">
                <div class="card-header text-left">
                    Capacitadores
                </div>
                    <div class="card-body">
                        <!-- <canvas id="pieChart"></canvas> -->
                        <form role="form" class="form-horizontal" id="addPersona">
                            <div class="form-group row">
                                <label for="dpi" class=" col-sm-2 control-label">DPI:</label> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <input type="text" name="dpi" id="dpi" class="form-control" placeholder="DPI">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nombre" class=" col-sm-2 control-label">NOMBRE:</label> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre Persona">
                                </div>

                                <label for="apellido" class=" col-sm-2 control-label">APELLIDO:</label> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido Persona">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fecha" class=" col-sm-2 control-label">FECHA NAC:</label> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <input type="text" data-field="date" name="fecha" id="fecha" class="form-control" placeholder="Fecha de Nacimiento">
                                    <div id="dtBox"></div>
                                </div>

                                <label for="edad" class=" col-sm-2 control-label">EDAD:</label> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <input type="text" name="edad" id="edad" class="form-control" placeholder="Edad Persona">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="direccion" class=" col-sm-2 control-label">DIRECCIÓN:</label> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Dirección Persona">
                                </div>

                                <label for="telefono" class=" col-sm-2 control-label">TELÉFONO:</label> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Teléfono">
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
    <form  id="EPersona">
        <div id="modalEditar" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg ">  
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                        <form role="form" class="form-horizontal">
                            <input type="hidden" name="idPersona" id="idPersona">
                            <div class="form-group row">
                                <label for="nombre" class=" col-sm-2 control-label">NOMBRE:</label> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <input type="text" name="nombreE" id="nombreE" class="form-control" placeholder="Nombre Persona">
                                </div>

                                <label for="apellido" class=" col-sm-2 control-label">APELLIDO:</label> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <input type="text" name="apellidoE" id="apellidoE" class="form-control" placeholder="Apellido Persona">
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

    <form  id="DPersona">
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

    <form  id="APersona">
        <div id="modalAsignar" class="modal fade" role="dialog">
        <div class="modal-dialog">  
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Asignación</h4>
            </div>
            <div class="modal-body">
                        <form role="form" class="form-horizontal">
                            <input type="hidden" name="idPersonaA" id="idPersonaA">
                            <div class="form-group row">
                                <label for="nombreA" class=" col-sm-2 control-label">NOMBRE:</label> 
                                <div class="col-xs-1 col-sm-10 col-md-10 col-lg-10">
                                    <input type="text" name="nombreA" id="nombreA" class="form-control" placeholder="Nombre Persona">
                                </div>
                            </div>
                        </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" >Asignacr</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
            </div>
        </div>
        </div>
    </form>

    <form  id="DAPersona">
        <div id="modaldasignar" class="modal fade" role="dialog">
        <div class="modal-dialog">  
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Eliminar Capacitador</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                <input type="hidden" name="idEpersona" id="idEpersona" value="">
                    <div class="form-group">
                        ¿Está seguro de Eliminar este capacitador?
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
                    <table class="table table-hover" id="tPersonas">
                        <thead>
                            <th>DPI</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>FECHA NACIMIENTO</th>
                            <th>EDAD</th>
                            <th>DIRECÓN</th>
                            <th>TELÉFONO</th>
                            <th>CONTROL</th>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 mb-12 tabla">
            <div class="card">
                <div class="card-header">Capacitadores</div>
                <div class="card-body">
                    <table class="table table-hover" id="RtPersonas">
                        <thead>
                            <th>DPI</th>
                            <th>NOMBRE COMPLETO</th>
                            <th>ROL</th>
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
    addPersona('#addPersona');
    editarPersona('#EPersona','view/capacitador.php','#modalEditar');
    deletePersona('#DPersona','view/capacitador.php','#modalEliminar');
    asignacionPersona('#APersona','view/capacitador.php','#modalAsignar');
    DasignacionPersona('#DAPersona','view/capacitador.php','#modaldasignar');
    $("#dtBox").DateTimePicker();
    $("#fecha").blur(function(){
        CalcularEdad(this.id);
    });
   
})

</script>