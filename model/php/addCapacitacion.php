<?php 

    require_once('../../controller/conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $nombre = $_POST['nCapa'];
    try{
        $x = $llamar->prepare("EXEC SP_ADD_CAPACITACION ?");
        $x->bindParam(1, $nombre, PDO::PARAM_STR);
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