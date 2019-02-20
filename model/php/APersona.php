<?php 

    require_once('../../controller/conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $DPI = $_POST['idPersonaA'];

    try{
        $x = $llamar->prepare("EXEC SP_ASIGNACION_PERSONA ?");
        $x->bindParam(1, $DPI, PDO::PARAM_INT);

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