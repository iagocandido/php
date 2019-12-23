<?php

interface Veiculo{

	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);

}

class Civic implements Veiculo{

public function acelerar($velocidade){

	echo "O veiculo acelerou ate : " . $velocidade . "km";

	}
	public function freiar($velocidade){

	echo "O veiculo freio ate : " . $velocidade . "km";

	}
	public function trocarMarcha($marcha){

	echo "O veiculo engatou : " . $marcha . " marcha";

	}
}

$carro = new Civic();

$carro-> trocarMarcha(1);

?>