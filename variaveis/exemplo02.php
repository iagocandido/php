<?php

$sobrenome = " Candido";
$nome1 = "Iago";

$nomeCompleto = $nome1." ".$sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1);

if (isset($nome1)){

echo $nome1;

}
?>