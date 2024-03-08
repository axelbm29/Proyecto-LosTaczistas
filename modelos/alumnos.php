<?
    include_once('conexion.php');
    class alumnos extends conexion
    {
        public function validarAlumnos($docIdnt)
        {
            $this -> conectar();
            $SQL ="SELECT A.*
                FROM alumno A
                WHERE A.dni = '$docIdnt';
                ";
            $resultado = mysql_query($SQL);
            $filas = mysql_num_rows($resultado);
            $this -> desConectar();
            if($filas == 0)
                return NULL;
            else
            {
                for($i = 0 ; $i < $filas; $i++)
                     $respuesta[$i] = mysql_fetch_array($resultado);                    
                return $respuesta;
            }            
        }        
    }
?>