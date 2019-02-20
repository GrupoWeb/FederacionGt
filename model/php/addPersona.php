<?php 

    require_once('../../controller/conexion/conexion.php');

    $conn = new Conexion();
    $llamar = $conn->Conectar();
    $DPI = $_POST['dpi'];
    $NOMBRE = $_POST['nombre'];
    $APELLIDO = $_POST['apellido'];
    $FECHA = $_POST['fecha'];
    $EDAD = $_POST['edad'];
    $DIRECCION = $_POST['direccion'];
    $TELEFONO = $_POST['telefono'];

    try{
        $x = $llamar->prepare("EXEC SP_ADD_PERSONA ?,?,?,?,?,?,?");
        $x->bindParam(1, $DPI, PDO::PARAM_INT);
        $x->bindParam(2, $NOMBRE, PDO::PARAM_STR);
        $x->bindParam(3, $APELLIDO, PDO::PARAM_STR);
        $x->bindParam(4, $FECHA, PDO::PARAM_STR);
        $x->bindParam(5, $EDAD, PDO::PARAM_INT);
        $x->bindParam(6, $DIRECCION, PDO::PARAM_STR);
        $x->bindParam(7, $TELEFONO, PDO::PARAM_STR);
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