<?php 
    require_once('../../controller/conexion/conexion.php');

    $conn = new Conexion();
    $conexion = $conn->Conectar();

    try {
        $sql = $conexion->prepare("EXEC SP_GRAFICO_CAPACITACIONES");
        $sql->execute(); 
        $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        foreach($resultado as $row) {
            $output[] = array(
                'cantidad'  => floatval($row["CANTIDAD"]),
                'capa'  => $row["descripcion"]
                );
        }
        $sql->closeCursor();
        echo json_encode($output);
    } catch (PDOException $e) {
        
    }



?>