<?php

	function excluir($placa){
		//conexão com o banco
		$pdo = new PDO('mysql:host=localhost;dbname=phpdb', 'root', '');

		//prepara o comando para ser compilado
		$stmt = $pdo->prepare('DELETE FROM automovel WHERE placa = :placa');

		//executa o comando de exclusão utilizando o parâmetro da função
		$stmt->execute([':placa' => $placa]);
	}
	
	//manda o id a ser excluido como parametro da função
	excluir('XYZ1234');

?>