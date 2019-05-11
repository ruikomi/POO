<?php

class Imc
{
    private $minimo;
    private $maximo;
    private $pessoa;

    public function __construct(Pessoa $xPessoa)
    {
        $this->pessoa = $xPessoa;
        $this->minimo = 19;
        $this->maximo = 21;
    }

    public function calcular()
    {
        // faco o calculo do imc usando os metodos que a classe Pessoa define
        // e consigo fazer isso pois um objeto pessoa foi armazenado na propriedade,
        // que nesse caso, tem o mesmo nome
        return $this->pessoa->getPeso() / ($this->pessoa->getAltura() ** 2);
    }

}


