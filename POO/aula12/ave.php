<?php

namespace aula12;
require_once 'animal.php';

class ave extends animal{
    private $corPena;
    function locomover()
    {
        echo"<p>Vooando";

    }

    function alimentar()
    {
        echo"<p>Comendo Sementes";

    }

    function emitirSom()
    {
        echo"<p>Som de ave";

    }
    function fazerNinho(){
        echo"<p>fazendo ninho";


    }

    public function getCorPena()
    {
        return $this->corPena;
    }


    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;
    }

}
?>