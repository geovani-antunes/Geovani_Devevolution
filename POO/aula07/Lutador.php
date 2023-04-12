<?php

class Lutador
{
    private $matr;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    //metodo contrutor


   public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->matr = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;

    }


    //metodos
    public function apresentar(){
    echo "<br>Lutador: " . $this->getmatr();
    echo "<br>Origem: "  . $this->getNacionalidade();
    echo $this->getIdade() ." Anos.";
    echo $this->getAltura() . " M de altura.";
    echo "<br>Pesando: " . $this->getPeso() . "Kg";
    echo "Ganhou: " . $this->getVitorias();
    echo "Perde: " . $this->getDerrotas();
    echo "Empatou: " . $this->getEmpates();
    }
    public function status(){
       echo "<br>    ============================================";
        echo " E um peso: " . $this->getCategoria();
        echo " Vitorias: " . $this->getVitorias();
        echo " Derrotas: " . $this->getDerrotas();
        echo " Empates: " . $this->getEmpates();
        echo "===============================================";
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);

    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }

    //Getters and Setters

    public function getmatr()
    {
        return $this->matr;
    }

    public function setmatr($matr)
    {
        $this->matr = $matr;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria()
    {
        if($this->peso<52.2){
            $this->categoria = "Invalido";

        } elseif ($this->peso <= 70.3){
            $this->categoria = ("Leve ");
        } elseif ($this->peso<=83.9){
            $this->categoria = ("Medio ");
        } elseif ($this->peso<=120.2){
            $this->categoria = ("Pesado ");
        } else {
            echo "Invalido";
        }    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    public function getEmpates()
    {        return $this->empates;
    }

    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }


}