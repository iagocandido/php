<?php

$frase = "A repetição e mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, "mãe");

$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

?>