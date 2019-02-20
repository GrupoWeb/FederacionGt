<?php 
    require_once('../../controller/conexion/conexion.php');

    $conn = new Conexion();
    $conexion = $conn->Conectar();

    try {
        $sql = $conexion->prepare("EXEC SP_GRAFICO_CAPACITACIONES_SEXO");
        $sql->execute(); 
        $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        foreach($resultado as $row) {
            $output[] = array(
                'hombre'  => floatval($row["hombres"]),
                'nombre'  => "HOMBRES",
                'mujer'  => floatval($row["mujeres"]),
                'nombreM'  => "MUJER"
                );
        }
        $sql->closeCursor();
        echo json_encode($output);
    } catch (PDOException $e) {
        
    }



?>