<?php
require_once 'people.php';
class aluno extends people
{
private $matr;
private $curso;

public function cancelarMatr(){
    echo 'Matricula Cancelada';
}

//metodos getters and setters
public function getMatr(){
    return $this->matr;
}

public function setmatr($matr){
$this->matr = $matr ;
    }

public function getcurso(){
    return $this->curso;
    }
    
public function setCurso($curso){
$this->curso = $curso ;
    }
        

}
?>