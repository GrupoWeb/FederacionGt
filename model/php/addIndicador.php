<?php 

    require_once('../../controller/conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $PREGUNTA = $_POST['Cpregunta'];
    $CAPACITACION = $_POST['CCapacitaciones'];
    $RESPUESTA = $_POST['cRespuesta'];
    try{
        $x = $llamar->prepare("EXEC SP_ADD_INDICADOR ?,?,?");
        $x->bindParam(1, $PREGUNTA, PDO::PARAM_INT);
        $x->bindParam(2, $CAPACITACION, PDO::PARAM_INT);
        $x->bindParam(3, $RESPUESTA, PDO::PARAM_STR);
        $x->execute();
        if( $x ) {
            echo "success";
        }else{
            echo "malo";
        };
        $x->closeCursor();
    }catch(PDOException $e){
        if ($e->getCode() == 1062) {
            echo "No se puede insertar";
        }else{
            throw $e;
            
        }
    }
?>