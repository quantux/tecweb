<?php

	// Definição dos serviços
	function somar($args) {
		return $args[0] + $args[1];	
	}

	function subtrair($args) {
		return $args[0] - $args[1];	
	}
	
	function multiplicar($args) {
		return $args[0] * $args[1];	
	}

	function dividir($args) {
		if($args[1] != 0) 
			return  $args[0] / $args[1];
		else
			return 0;	
	}

	function cadastrar($args) {
		return "O usuário ". $args['nome'] ." de ". $args['idade'] ." foi cadastrado com sucesso.";
	}

	// Criação de uma instancia do servidor (coloque o endereço na sua maquina local)
	$server = new SoapServer(null, array('uri' => "http://localhost/dad/webservices"));

	// Registro dos servicos
	$server->addFunction("somar");
	$server->addFunction("subtrair");
	$server->addFunction("multiplicar");
	$server->addFunction("dividir");
	$server->addFunction("cadastrar");

	// Chamada do método para atender as requisição dos servicos 
	// Se a chamada for um POST executa, senão apenas mostra as funcoes 'cadastradas'
	if ($_SERVER["REQUEST_METHOD"]== "POST") {
			$server->handle();		
	} else {
		$functions = $server->getFunctions();
		foreach ($functions as $func) {
			print $func. "<br>";
		}
	}
?>
