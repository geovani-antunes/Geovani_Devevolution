<?php

class people {

private $nome;
private $idade;
private $sexo;


//metodos
public function fazerAniver(){
    
}

//metodos getters and setters
public function getNome(){
    return $this->nome;
}

public function setNome($nome){
$this-> nome = $nome ;
    }

public function getIdade(){
    return $this->idade;
}

public function setIdade($idade){
    $this->idade =$idade;
}

public function getSexo()
{
    return $this->sexo;
}
public function setSexo($sexo){
    $this->sexo = $sexo;
}

}

?>