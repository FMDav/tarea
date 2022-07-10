<html>
    <head>
        <title>TRABAJO 70</title>
    </head>
    <body>
        <?php
            //clase
            class CFormato{
                private $nombre, $horas, $sueldohoras;
                public function __construct($n,$h,$s){
                    $this -> nombre = $n;
                    $this -> horas = $h;
                    $this -> sueldohoras = $s;
                }
                public function getNombre(){
                    return $this -> nombre;
                }
                public function getHoras(){
                    return $this -> horas;
                }
                public function getSueldohoras(){
                    return $this -> sueldohoras;
                }
                public function calcular(){
                    return ($this -> horas * $this -> sueldohoras);
                }
            }
            //mostrar
            $formato = new CFormato($_POST['nombre'],$_POST['horas'],$_POST['salario']);
            echo ("Nombre: ").($formato -> getNombre() . "<br>");
            echo ("Horas: ").($formato -> getHoras() . "<br>");
            echo ("Sueldo p/h: ").($formato -> getSueldohoras() . "<br>");
            echo ("Sueldo total del empleado ").($formato -> getNombre() . ": ").($formato -> calcular());
        ?>
    </body>
</html>