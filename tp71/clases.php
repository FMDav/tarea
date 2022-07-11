<html>
    <head>
        <title>TRABAJO 70</title>
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
            }
            //mostrar
            $rectangulo = new CRectangulo ($_POST['ancho'],$_POST['largo']);
            echo ("Perimetro: ") . $rectangulo -> CalcularPerimetro() . "<br>";
            echo ("Area: ") . $rectangulo -> CalcularArea() . "<br>";
        ?>
    </body>
</html>