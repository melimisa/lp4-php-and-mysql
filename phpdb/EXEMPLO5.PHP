<?php
	//conexao com banco de dados
	$pdo = new PDO('mysql:host=localhost;dbname=phpdb', 'root', '');

	/*
		Transação: ou executa todos os updates ou não executa nada.
	*/

	$stmt = $pdo->prepare('update automovel set placa=:novaPlaca where placa=:placaAnt');

	//inicar trnasação
	

	try{
		$stmt->execute([':novaPlaca'=> 'AAA1111', ':placaAnt' =>'KJL4321']);
		$stmt->execute([':novaPlaca'=> 'AAA1111', ':placaAnt' =>'XYZ1234']);
	}
	catch(PDOException){
		
	}

	

?>