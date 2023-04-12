<?php
require_once 'people.php';
class func extends people{

    private $setor;
    private $trabalhando;

    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }

    //metodos getters and setters
public function getSetor(){
    return $this->setor;
}

public function setSetor($setor){
$this->setor = $setor ;
    }

public function getTrabalhando(){
    return $this->trabalhando;
    }
    
public function setTrabalhando($trabalhando){
$this->trabalhando = $trabalhando ;
    }

}
?>