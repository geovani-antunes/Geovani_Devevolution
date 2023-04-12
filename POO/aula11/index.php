<pre>
<?php
require_once 'visitante.php';
require_once 'aluno.php';
require_once 'bolsista.php';


$v1 = new visitante();
$v1->setNome("Juvenal");
$v1->setIdade(18);
$v1->setSexo("M");

$a1 = new aluno();
$a1->setNome("Pedro");
$a1->setIdade(18);
$a1->setSexo("M");
$a1->setMatricula(1111);
$a1->setCurso("Programador");
$a1->pagarMensalidade();

$b1 = new bolsista();
$b1->setNome("Ari");
$b1->setIdade(65);
$b1->setSexo("M");
$b1->setMatricula(1111);
$b1->setCurso("Motorista");
$b1->pagarMensalidade();
$b1->setBolsa(12.5);


print_r($b1);

$nome = nome;
?>
    </pre>
