<?php
require_once "ator.class.php";
require_once "atuacao.class.php";
require_once "filme.class.php";

$ator1 = new Ator("Leonardo DiCaprio", "Americano");
$filme1 = new Filme("Titanic", "3 Horas");
$filme2 = new Filme("Ilha do Medo", "1 hr 50min");

$atuacao1 = new Atuacao("Jack", $filme1, $ator1);

echo "Filme: {$atuacao1->getFilme()->getTitulo()}<br>";

echo "Duração: {$atuacao1->getFilme()->getDuracao()}<br>";

echo "Ator: {$atuacao1->getAtor()->getNome()}<br>";

echo "Nacionalidade: {$atuacao1->getAtor()->getNacionalidade()}<br>";

echo "Papel: {$atuacao1->getPapel()}<br>";
?>