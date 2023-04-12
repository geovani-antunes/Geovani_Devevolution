<pre>
<?php
require_once "Person.php";
require_once "Book.php";

$p[0] = new Person("Pedro", 12, "M");

$l[0] = new Book("PHP Basico", "Jose Noronha", 300, $p[0]);

$l[0]->folhear(155);

print_r($l[0]);
?>
    </pre>
