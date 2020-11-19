<?php
	
	/*
		Transação: ou executa todos os updates ou não executa nada.
	*/

	$pdo = new PDO('mysql:host=localhost;dbname=phpdb', 'root', '');

	//configura o comportamento do try catch
	$pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

	$stmt = $pdo->prepare('update automovel set placa=:novaPlaca where placa=:placaAnt');

	//inicar trnasação
	$pdo->beginTransaction();

	try{
		$stmt->execute([':novaPlaca'=> 'ABC4123', ':placaAnt' =>'KJL4321']);
		$stmt->execute([':novaPlaca'=> 'AAA1111', ':placaAnt' =>'XYZ1234']);

		//confirmar transação
		$pdo-> commit();
		echo "Atualização realizada com sucesso!";
	}
	catch(PDOException $ex){
		//cancela a transação
		$pdo-> rollback();
		echo 'Erro ao atualizar - '. $ex->getMessage();
	}

?>