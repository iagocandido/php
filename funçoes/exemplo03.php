<?php

function ola ($texto = "mundo", $periodo="Bom dia") {

	return "Ola $texto! $periodo <br>";

}

echo ola("mundo");
echo ola("", "Boa Noite");
echo ola("Iago, Boa Tarde");
echo ola("Joao", "");

?>