<?php

class  Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar(){
        if ($this->tampada == true){
            echo "<p>nao e possovel rabiscar...</p>";

        }
        elseif($this->tampada == false) {
            echo "<p>estou rabiscando...</p>";

        }
    }
    public function tampada(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;

    }
}
