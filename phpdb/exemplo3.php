<?php
	
	//conexao com banco de dados
	

	function excluir($placa){
		$pdo = new PDO('mysql:host=localhost;dbname=phpdb', 'root', '');
		$stmt = $pdo->prepare('DELETE FROM automovel WHERE placa = :placa');
		$stmt->execute([':placa' => $placa]);
	}
	
	excluir('XYZ1234');

?>