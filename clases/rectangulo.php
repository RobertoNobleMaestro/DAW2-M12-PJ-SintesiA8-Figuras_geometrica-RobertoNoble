<?php
class Rectangulo extends FiguraGeometrica {
    private $lado2;
    public function __construct($tipoFigura, $lado1, $lado2) {
        parent::__construct($tipoFigura, $lado1, $lado2); 
        $this->lado2 = $lado2; 
    }
    public function __destruct() {
        echo "Destruyendo el objeto rectangulo";
    }
    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }
    public function calcularArea() {
        return $this->getLado1() * $this->lado2;
    }

    public function calcularPerimetro() {
        return ($this->getLado1() * $this->lado2) + ($this->getLado1() * $this->lado2);
    }

    public function __toString() {
        return $this->getForma() . ". " . $this->getLado1() . ", " . $this->lado2 . ", " .
        ". Área: " . $this->calcularArea() . ". Perímetro: " . $this->calcularPerimetro();
    }
}
?>
