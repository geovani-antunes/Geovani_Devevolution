<pre>
<?php

require_once 'people.php';
require_once 'aluno.php';
require_once 'professor.php';
require_once 'func.php';

//programa principal
$p1 = new people();
$p2 = new aluno();
$p3 = new professor();
$p4 = new func();

$p1->setNome("Pedro");
$p2->setNome("Maria");
$p3->setNome("Claudio");
$p4->setNome("Fabiana");

$p2->setCurso("informatica");
$p3->setSalario(3000);
$p4->setSetor("Estoque");

$p3->receberAumento(550.20);
$p4->mudarTrabalho();
$p2->cancelarMatr();



print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);


?>
</pre>