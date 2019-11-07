<?php

	// Passando o endereço do servidor
	$client = new SoapClient(null, array(
		'location' => 'http://localhost/dad/webservices/servidor.php',
		'uri' => 'http://localhost/dad/webservices/servidor.php', 
		'trace' => 1));

	// Chamada do serviço SOAP
	$result[0] = $client->somar(array(8,2));
	$result[1] = $client->subtrair(array(8,2));
	$result[2] = $client->multiplicar(array(8,2));
	$result[3] = $client->dividir(array(8,2));
	$result[4] = $client->cadastrar(array('nome' => 'Felipe Carvalho', 'idade' => '20 anos'));

	// var_dump($result);
				
	// Verifica erros na execução do serviço e exibe o resultado
	if (is_soap_fault($result)){
		echo "Erro ao executar o WebServices!";
	} else {
		echo "Resultado encontrado: A soma é:  ". $result[0] . "<br />";
		echo "Resultado encontrado: A subtracao é:  ". $result[1] . "<br />";
		echo "Resultado encontrado: A multiplicacao é:  ". $result[2] . "<br />";
		echo "Resultado encontrado: A divisao é:  ". $result[3] . "<br /><br />";
		echo $result[4] . "<br />";
	}
?>

