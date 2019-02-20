    <?php
    date_default_timezone_set('America/Guatemala');
      $fecha = isset($_GET['fecha']) ? $_GET['fecha'] : "" ;  
      $errores = "";
      if (!$fecha){
        echo "Error fecha no vacia";
        exit();
      }
      $pfecha = explode('-', $fecha);
      
      if (count($pfecha)<2){
        echo "Error fecha no vacia";
        exit(); //detenemos la ejecución
      }
      $fechavalida = checkdate($pfecha[1], $pfecha[0], $pfecha[2]);  
      
      
      if ($fechavalida == false){
        echo "Error fecha no válida";
        exit();
      }
      
      $edad = 0;
      //Fecha actual
      $dia=date("d");
      $mes=date("m");
      $anio=date("Y");
      
      //fecha de nacimiento
      $dia_nc = $pfecha[0];
      $mes_nc = $pfecha[1];
      $anio_nc = $pfecha[2];
      
      //restamos para calcular la edad parcial
      $edad = $anio - $anio_nc;
      
      //le restamos un años si el mes es igual al mes de su cumpleaños pero su dia no
      //ejemplo si cumple en enero 26 y la fecha actual es enero 25 hay que retar por que no ha cumplido  
      if (($mes_nc == $mes) && ($dia_nc > $dia)) 
        $edad = ($edad - 1); 
        
      //en este caso si todavia no es el mes de su cumple tambien se resta
      if ($mes_nc > $mes) 
        $edad = ($edad - 1);
      
      
      if (!$errores)  
        echo $edad;
      else
        echo $errores;  
    ?>