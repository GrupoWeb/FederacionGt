<?php
    date_default_timezone_set('America/Guatemala');
    require_once('../../controller/conexion/conexion.php');
    $conn = new Conexion();
    $llamar = $conn->Conectar();


    $dia=date("d");
    $mes=date("m");
    $anio=date("Y");

    $Fdata = ($dia. '-' . $mes . '-' . $anio);
    

    $name = $_FILES["file"]["name"]; 
    $title = $_POST['uploadtitle'];
    $capacitacion = $_POST['Ccapacitacion'];
    $Capacitador =$_POST['Ccapacitador'];
    $Cantidad = $_POST['Ccantidad'];
    $Mujeres = $_POST['Cmujeres'];
    $Hombres = $_POST['Chombres'];
    $fecha = $_POST['Cfecha'];
    $hInicial = $_POST['ChoraI'];
    $hFinal = $_POST['ChoraF'];
    $Observacion = $_POST['Cobservacion'];


    $namedata = $Fdata.'-'.$name;

if (isset($name)) {

    try{
        $x = $llamar->prepare("EXEC SP_ADD_CAPACITACION_ADJUNTO ?,?,?,?,?,?,?,?,?,?,?");
        $x->bindParam(1, $capacitacion, PDO::PARAM_INT);
        $x->bindParam(2, $Capacitador, PDO::PARAM_INT);
        $x->bindParam(3, $Cantidad, PDO::PARAM_INT);
        $x->bindParam(4, $Mujeres, PDO::PARAM_INT);
        $x->bindParam(5, $Hombres, PDO::PARAM_INT);
        $x->bindParam(6, $fecha, PDO::PARAM_STR);
        $x->bindParam(7, $hInicial, PDO::PARAM_STR);
        $x->bindParam(8, $hFinal, PDO::PARAM_STR);
        $x->bindParam(9, $Observacion, PDO::PARAM_STR);
        $x->bindParam(10, $name, PDO::PARAM_STR);
        $x->bindParam(11, $namedata, PDO::PARAM_STR);

        $x->execute();
       $type = $_FILES["file"]["type"];
        if (move_uploaded_file($_FILES["file"]['tmp_name'], "../UploadFile/".$Fdata.'-'.$name) && $x)
            {
                echo "success";
            }else{ 
                echo "no"; 
            } 
        $x->closeCursor();
    }catch(PDOException $e){
        if ($e->getCode() == 1062) {
            echo "No se puede insertar";
        }else{
            throw $e;
            
        }
    }
}
?>