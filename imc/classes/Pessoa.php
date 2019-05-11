
<?php

class Pessoa {

    private $peso;
    private $altura;

    public function __construct(float $xPeso, float $xAltura)
    {
        $this->peso = $xPeso;
        $this->altura = $xAltura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function getAltura()
    {
        return $this->altura;
    }

}


