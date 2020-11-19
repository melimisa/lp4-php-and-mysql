<?php
	//conexao com banco de dados
	$pdo = new PDO('mysql:host=localhost;dbname=phpdb', 'root', '');

	/*
		parametros = :placa :marca_modelo :preco
		prepara a interface do comando para fazer inserção somente com parâmetros
		análise sintática e compilação (demorado)
	*/
	$stmt = $pdo->prepare('insert into automovel values (:placa, :marca_modelo, :preco)');
	
	//executando o comando qnts vezes forem necessárias usando um vetor de valores
	$stmt->execute([':placa'=>'XYZ1234', ':marca_modelo'=>'FIAT PALIO', ':preco'=>10000.00]);
	$stmt->execute([':placa'=>'KJL4321', ':marca_modelo'=>'GOL BOLINHA', ':preco'=>20000.00]);

	//estratégia para inserção massiva de dados
?>

