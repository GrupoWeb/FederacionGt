<?php 

    require_once('../../controller/conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $ID = $_POST['idPreguntaD'];
    try{
        $x = $llamar->prepare("EXEC SP_DELETE_PREGUNTA ?");
        $x->bindParam(1, $ID, PDO::PARAM_INT);
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