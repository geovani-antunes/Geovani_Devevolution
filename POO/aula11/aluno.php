<?php
require_once 'pessoa.php';
class aluno extends pessoa {
    private $matricula;
    private $curso;

    public function pagarMensalidade(){
        Echo "<p>Pagando mensalidade do aluno $this->nome ";
    }


    public function getMatricula()
    {
        return $this->matricula;
    }


    public function setMatricula($matricula): self
    {
        $this->matricula = $matricula;

        return $this;
    }


    public function getCurso()
    {
        return $this->curso;
    }


    public function setCurso($curso): self
    {
        $this->curso = $curso;

        return $this;
    }
}

?>