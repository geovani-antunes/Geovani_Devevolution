<?php
require_once 'aluno.php';
class bolsista extends aluno {

    private $bolsa;

    public function renovarBolsa(){
        echo "<p>Bolsa Renovada";
    }

    public function pagarMensalidade()
    {
        echo "<p> $this->nome e bolsista, entao paga com desconto ";
    }


    public function getBolsa()
    {
        return $this->bolsa;
    }


    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }

}
?>