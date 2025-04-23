<?php
require_once "produto.class.php";
require_once "categoria.class.php";

//Categorias
$categoria1 = new Categoria("Material Escolar");
$categoria2 = new Categoria("Material de Escritório");

//Produtos
$produto1 = new Produto('Lápis preto', 2.50, array($categoria1));
$produto2 = new Produto("caderno brochura", 10.00, array($categoria1));

$produto1->setCategoria($categoria2); //Faz isso para adicionar uma categoria em um produto já adicionado

// echo "<pre>";
// var_dump($produto1);
// echo "</pre>";

// echo "<br><br><pre>";
// var_dump($produto2);
// echo "</pre>";

// mostrar o produto
echo "<h1>Produto 1</h1>";
echo "Nome: {$produto1->getNome()} <br>";
echo "Preço: {$produto1->getPreco()} <br>";
echo "Categoria(s): <br>";
foreach ($produto1->getCategoria() as $categoria) {
    echo "Descritivo: {$categoria->getDescritivo()} <br>";
}
?>