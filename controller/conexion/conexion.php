<?php 
class Conexion {
    private $db = 'sqlsrv:Server=DESKTOP-KAR9B7P\SQLEXPRESS;Database=dace';
    private $user = 'sa';
    private $password = '123456';

    public function Conectar(){
        try{
            $base = new PDO($this->db, $this->user, $this->password);
            $base->exec('SET CARACTER SET utf8');
            if ($base) {
                return $base;
            }
        }catch (PDOException $exceptione) {
                $exceptione->getMessage();
                die("Error " . "<div style='color: red;'><strong>" . $exceptione->getMessage() . "</strong></div>");
        }
    }
}
?>


