<?php
class FiguraGeometrica {
    public $tipoforma;
    public $lado1;
    public function __construct($tipoforma, $lado1){
        $this->tipoforma = $tipoforma;
        $this->lado1 = $lado1;
    }

    public function getLado1(){
        return $this->lado1;
    }
    public function setLado1($lado1){
        $this->lado1 = $lado1;
    }

    public function getForma(){
        return $this->tipoforma;
    }
    public function setForma($tipoforma){
        $this->tipoforma = $tipoforma;
    }

    public function calcularArea() {
        echo "Este método debe ser sobreescrito por las subclases si es necesario.";
    }
}
?>
