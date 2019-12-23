<?php

$nome = "Iago";

function teste() {

	global $nome;

	echo $nome;
}
function teste2() {

	$nome = "Iago";
	
	echo ;
}

teste();

?>