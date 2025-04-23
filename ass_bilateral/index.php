<?php
	require_once "fornecedor.class.php";
	require_once "produto.class.php";
	
	$fornecedor1 = new Fornecedor("111.111.111/0001", "Faber Castel", new Produto());
	
	$produto1 = new Produto("Lápis Preto", "Lápis preto numero 2", 3.5, array($fornecedor1));
	
	$fornecedor2 = new Fornecedor("222.222.222/0002", "Leo e Leo", new Produto());
	
	$produto1 -> setFornecedor($fornecedor2);
	
	//echo "<pre>";
	//var_dump($produto1);
	//echo "</pre>";
	
	echo "Nome: {$produto1 -> getNome()}<br>";
	echo "Descrição: {$produto1 -> getDescricao()}<br>";
	echo "Preço: " . number_format($produto1 -> getPreco(), 2, ",", ".") . "<br>";
	echo "Fornecedores<br>";
	foreach($produto1 -> getFornecedor() as $dado)
	{
		echo "CNPJ: {$dado -> getCnpj()} <br>";
		echo "Razão Social: {$dado -> getRazaoSocial()} <br>";

	}
?>