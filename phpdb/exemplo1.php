<?php
	//conexao com banco de dados
	$pdo = new PDO('mysql:host=localhost;dbname=phpdb', 'root', '');


	//primeiro preparo o comando a ser executado
	$stmt = $pdo->prepare('create table automovel (
							placa varchar(10) not null primary key,
							marca_modelo varchar(50) not null,
							preco decimal(12,2) not null
							)'
						);
	
	//executando o comando
	$stmt->execute();

?>