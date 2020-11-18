<?php
	//conexao com banco de dados
	$pdo = new PDO('mysql:host=localhost;dbname=phpdb', 'root', '');

	$stmt = $pdo->prepare('insert into automovel values (:placa, :marca_modelo, :preco)');
	
	//executando o comando
	$stmt->execute([':placa'=>'XYZ1234', ':marca_modelo'=>'FIAT PALIO', ':preco'=>10000.00]);
	$stmt->execute([':placa'=>'KJL4321', ':marca_modelo'=>'GOL BOLINHA', ':preco'=>20000.00]);
?>

