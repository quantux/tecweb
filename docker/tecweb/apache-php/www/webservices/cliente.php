 <?php
    include('lib/nusoap.php');
    $cliente = new nusoap_client('http://localhost/webservices/servidor.php?wsdl');

    $parametros = array('num1' => 1, 'num2' => 2);

	$resultado = $cliente->call('somar', $parametros);
    
    echo utf8_encode($resultado);
 ?>
