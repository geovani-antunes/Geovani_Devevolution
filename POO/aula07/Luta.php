<?php
require_once 'Lutador.php';
class Luta
{
    private $desafiado;
    private $desafiante;
    private $round;
    private $autorizado;

    public function marcarLuta($l1, $l2){
        if ($l1->getCategoria() === $l2->getCategoria()
            && ($l1 != $l2)) {
        $this->autorizado = true;
        $this->desafiado = $l1;
        $this->desafiante = $l2;
        } else {
            $this->autorizado = false;
            $this->desafiado = null;
            $this->desafiante = null;
            echo "Impossivel Marcar luta";
        }

    }
    public function lutar(){
        if ($this->autorizado){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor){
                case 0: //empate
                        echo "Empate";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                    break;
                case 1: //desafiado vence
                    echo $this->desafiado->getmatr()." Venceu";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2: //desafiante ence
                    echo $this->desafiante->getmatr()." Venceu";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        } else {
            echo "Luta nao pode acontecer";
        }
    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function setDesafiado(Lutador $desafiado)
    {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;
    }


    public function getRound()
    {
        return $this->round;
    }

    public function setRound($round)
    {
        $this->round = $round;
    }


    public function getAutorizado()
    {
        return $this->autorizado;
    }


    public function setAutorizado($autorizado)
    {
        $this->autorizado = $autorizado;
    }




}