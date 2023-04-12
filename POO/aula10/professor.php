<?php
require_once 'people.php';
class professor extends people{

    private $especialidde;
    private $salario;

    public function receberAumento($aum){
        $this->salario += $aum;
    }

        //metodos getters and setters
public function getEspecialidde(){
    return $this->especialidde;
}

public function setEspecialidde($especialidde){
$this->especialidde = $especialidde ;
    }

public function getSalario(){
    return $this->salario;
    }
    
public function setSalario($salario){
$this->salario = $salario ;
    }

}
?>