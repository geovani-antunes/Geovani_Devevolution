<?php

namespace aula12;
require_once 'animal.php';
class Reptil extends animal {
private $CorEscama;


    function locomover()
    {
        echo "<p>Rastejando</p>";

    }

    function alimentar()
    {
        echo "<p>comendo vegetais</p>";

    }

    function emitirSom()
    {
        echo "<p>Som de Reptil</p>";
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