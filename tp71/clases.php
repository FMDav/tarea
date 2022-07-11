<html>
    <head>
        <title>TRABAJO 71</title>
    </head>
    <body>
        <?php
            //clase
            class CRectangulo{
                private $ancho, $largo;
                public function __construct($a,$l){
                    $this -> ancho = $a;
                    $this -> largo = $l;
                }
                public function CalcularPerimetro(){
                    return $this -> ancho + $this -> ancho + $this -> largo + $this -> largo;
                }
                public function CalcularArea(){
                    return ($this -> ancho * $this -> largo);
                }
                public function MostrarDatos(){
                    return (("Perimetro: ") . $rectangulo -> CalcularPerimetro() . "<br>").(("Area: ") . $rectangulo -> CalcularArea() . "<br>");
                }
            }
            $rectangulo = new CRectangulo ($_POST['ancho'],$_POST['largo']);
            echo $rectangulo -> MostrarDatos();
        ?>
    </body>
</html>
