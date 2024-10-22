<?php
class Triangulo extends FiguraGeometrica {
    private $lado2;
    private $lado3;

    // Constructor
    public function __construct($tipoFigura, $base, $altura) {
        parent::__construct($tipoFigura, $base); // Consideramos lado1 como la base
        $this->lado2 = $altura; // Consideramos lado2 como la altura
        $this->lado3 = $altura; // Establecemos lado3 igual a lado2
    }

    // Destructor
    public function __destruct() {
    }

    // Getters y Setters
    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
        $this->lado3 = $lado2; // Sincronizamos lado3 al cambiar lado2
    }

    public function getLado3() {
        return $this->lado3;
    }

    public function setLado3($lado3) {
        $this->lado3 = $lado3; // Aunque se puede cambiar, por diseño debería seguir igual a lado2
        $this->lado2 = $lado3; // Sincronizamos lado2 al cambiar lado3
    }

    // Método para calcular el área (base * altura / 2)
    public function calcularArea() {
        return ($this->getLado1() * $this->lado2) / 2;
    }

    // Método para calcular el perímetro
    public function calcularPerimetro() {
        return $this->getLado1() + $this->lado2 + $this->lado3;
    }

    // Método mágico __toString
    public function __toString() {
        return $this->getForma() . " isósceles: ". $this->getLado1() . ", " . $this->lado2 . ", " . $this->lado3 .
        ". Área: " . $this->calcularArea() . ". Perímetro: " . $this->calcularPerimetro();
    }
}
?>
