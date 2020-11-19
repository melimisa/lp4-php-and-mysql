<?php
	//conexao com banco de dados
	$pdo = new PDO('mysql:host=localhost;dbname=phpdb', 'root', '');

	$cmm = $pdo->prepare('SELECT * FROM automovel' );

	//o retorno é um obj armazenado em cmm
	$cmm->execute();

	//guarda a primeira linha dentro da variavel linha (somente indice de nome da coluna)
	//$linha = $cmm->fetch(PDO:: FETCH_ASSOC);

	//guarda a primeira linha dentro da variavel linha (somente indice numerico)
	//$linha = $cmm->fetch(PDO:: FETCH_NUM);

	//guarda todas as linhas dentro da variavel linha
	//$linha = $cmm->fetchAll();

	//guarda a primeira linha dentro da variavel linha (somente indice numerico)
	$linha = $cmm->fetch(PDO:: FETCH_ASSOC);
	while($linha != null){
		echo $linha['placa'].'<br>';
		$linha = $cmm->fetch(PDO:: FETCH_ASSOC);
	}

	//var_dump($linha);

?>