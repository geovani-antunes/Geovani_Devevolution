<?php

class Person
{
    private $idade;
    private $matr;
    private $sexo;

    //metodo
    public function fazerAniver(){
        $this->idade ++;
    }

    public function __construct($matr, $idade, $sexo){
        $this->matr = $matr;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function getidade(){
        return $this->idade;
    }
    public function setidade($idade){
        $this->idade = $idade;
    }


}
?>