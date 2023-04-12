<?php

namespace aula12;
require_once 'animal.php';

class peixe extends animal{
    private $corEscama;
    function locomover()
    {
        echo"<p>Nadando";

    }

    function alimentar()
    {
        echo"<p>Comendo substancias";

    }

    function emitirSom()
    {
        echo"<p>Nao emite som";

    }
    function soltarBolha(){
        echo"<p>Soltou uma Bolha";
    }

    public function getCorEscama()
    {
        return $this->CorEscama;
    }


    public function setCorEscama($CorEscama)
    {
        $this->CorEscama = $CorEscama;
    }
}


?>