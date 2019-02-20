<?php 

    require_once('../../controller/conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $ID = $_POST['idPersona'];
    $NOMBRE = $_POST['nombreE'];
    $APELLIDO = $_POST['apellidoE'];
    try{
        $x = $llamar->prepare("EXEC SP_UPDATE_PERSONA ?,?,?");
        $x->bindParam(1, $ID, PDO::PARAM_INT);
        $x->bindParam(2, $NOMBRE, PDO::PARAM_STR);
        $x->bindParam(3, $APELLIDO, PDO::PARAM_STR);
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