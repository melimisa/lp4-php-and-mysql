<?php
	//conexao com banco de dados
	$pdo = new PDO('mysql:host=localhost;dbname=phpdb', 'root', '');

	$stmt = $pdo->prepare('update automovel set placa=:novaPlaca where placa=:placaAnt');

	try{
		$stmt->execute([':novaPlaca'=> 'AAA1111', ':placaAnt' =>'KJL4321']);
		$stmt->execute([':novaPlaca'=> 'AAA1111', ':placaAnt' =>'XYZ1234']);
	}
	catch(PDOException){
		
	}

	

?>