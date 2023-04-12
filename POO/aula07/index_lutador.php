<pre>
<?php
require_once 'Lutador.php';
require_once 'Luta.php';

$l = array();
$l[0] = new Lutador(
    "Pretty Boy",
    "Franca",
    31, 1.75, 68.9,
    11,3,1);
$l[1] = new Lutador(
    "Putscript",
    "Brasil",
    29, 1.68, 57.8,
    14,2,3);


$l[2] = new Lutador(
        "Snapshadow",
    "EUA",
    35, 1.65, 80.9,
    12, 2, 1
);

$l[3] = new Lutador(
    "Dead Code",
    "Australia",
    28, 1.93, 57.6,
    13,0,2);


$UEC01 = new Luta();
$UEC01->marcarLuta($l[1], $l[3]);
$UEC01->lutar();
$l[0]->status();
$l[3]->status();



?>
</pre>