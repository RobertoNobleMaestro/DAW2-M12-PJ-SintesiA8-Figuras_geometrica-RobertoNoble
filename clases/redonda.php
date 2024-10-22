<?php
class Redonda extends FiguraGeometrica {
    // Constructor
    public function __construct($tipoFigura, $lado1) {
        parent::__construct($tipoFigura, $lado1); 
    }

    // Destructor
    public function __destruct() {
    }

    // Método para calcular el área (base * altura / 2)
    public function calcularArea() {
        return ($this->getLado1() * $this->getLado1() * pi());
    }

    // Método para calcular el perímetro
    public function calcularPerimetro() {
        return (2 * $this->getLado1() * pi());
    }
    // Método mágico __toString
    public function __toString() {
        return  $this->getForma() . " . Área: " . $this->calcularArea() . ". Perímetro: " . $this->calcularPerimetro();
    }
}
?>
