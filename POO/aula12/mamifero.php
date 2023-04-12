<?php
namespace aula12;

require_once 'animal.php';
class mamifero extends animal {
    private $corPelo;

    function locomover()
    {
        echo "<p>Correndo</p>";

    }

    function alimentar()
    {
        echo "<p>Mamando</p>";
    }

    function emitirSom()
    {
        echo "<p>Som de Mamifero</p>";

    }

    public function getCorPelo()
    {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
    }


}
?>