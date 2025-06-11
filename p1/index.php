<?php

require_once "avaliacao.class.php";
require_once "avaliador.class.php";
require_once "chef.class.php";
require_once "pressoa.class.php";
require_once "receita.class.php";
require_once "telefone.class.php";

$chef1 = new Chef("João", 14, '999999999', 'Picanha');
$avaliador1 = new Avaliador('Jaquin', '123.456.789-00', 14, '999999998');
$receita1 = new Receita('Picanha defumada com arroz e bacon',
 'Picanha defumada na brasa com arroz temperado e bacon crocante por cima');
 $avaliacao1 = new Avaliacao(
    8.5,
    $chef1,
    $avaliador1,
    $receita1
 );

 echo "<h1>Avaliação 1<h1><br>";
 echo "Chef Responsável: {$avaliacao1->getChef()->getNome()}<br>";
 echo "Avaliador: {$avaliacao1->getAvaliador()->getNome()}<br>";
 echo "receita {$avaliacao1->getNome()}<br>";
 echo "Nota do avaliador: {$avaliacao1->getNota()}";