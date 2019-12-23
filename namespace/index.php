<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Iago");
$cad->setEmail("Iago@gmail.com");
$cad->setSenha("12345");

$cad->registrarVenda();

 ?>