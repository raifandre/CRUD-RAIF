<?php

	include_once("../controllers/Pessoa_Controller.php");
	$pessoa = new Pessoa_Controller;
	
	if (isset ($_POST ["alterarPessoa"])){
	    $pessoa->alterar();
	}