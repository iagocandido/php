<?php

class Pessoa{

	public $nome;
	
	public function falar(){

		return "Meu nome e " .$this->nome;

	} 
}

$iago = new Pessoa();
$iago->nome = "Iago Cândido";
echo $iago->falar();


?>