<?php
	function somar($n1, $n2) {
		return $n1 + $n2;
	}

	function subtrair($n1, $n2) {
		return $n1 - $n2;
	}
	
	function multiplicar($n1, $n2) {
		return $n1 * $n2;
	}

	function dividir($n1, $n2) {
		if($n2 != 0) 
			return $n1 / $n2;
		else
			return 'undefined';
	}

	echo '<?xml version="1.0" encoding="iso-8859-1"?>';
	echo '<resultado type="soma">'.somar( $_GET ['n1'], $_GET ['n2']).'</resultado>';
	echo '<resultado type="subtracao">'.subtrair( $_GET ['n1'], $_GET ['n2']).'</resultado>';
	echo '<resultado type="multiplicacao">'.multiplicar( $_GET ['n1'], $_GET ['n2']).'</resultado>';
	echo '<resultado type="divisao">'.dividir( $_GET ['n1'], $_GET ['n2']).'</resultado>';
?>
