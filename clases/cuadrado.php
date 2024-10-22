<?php
class Cuadrado extends FiguraGeometrica {
    public function __construct($tipoFigura, $lado1) {
        parent::__construct($tipoFigura, $lado1); // Cambiar lado1 como la base
    }
    public function __destruct() {
    }
    public function calcularArea() {
        return $this->getLado1() * $this->getLado1();
    }

    public function calcularPerimetro() {
        return $this->getLado1() + $this->getLado1() + $this->getLado1() + $this->getLado1();
    }

    public function __toString() {
        return $this->getForma() . ". " . $this->getLado1() . 
        ". Área: " . $this->calcularArea() . ". Perímetro: " . $this->calcularPerimetro();
    }
}
?>
