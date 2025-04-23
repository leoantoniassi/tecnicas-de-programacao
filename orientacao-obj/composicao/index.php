<?php
require_once "usuario.class.php";
require_once "celular.class.php";

$usuario1 = new Usuario("Vera", "111.111.111-11", "vera@email.com", 14, "99999 - 9999");
$usuario1->setCelular(15, "99999-9998");

// echo "<pre>";
// var_dump($usuario1);
// echo "</pre>";

echo "<h2>Nome: {$usuario1->getNome()} <br></h2>";
echo "<h2>CPF: {$usuario1->getCpf()}<br></h2>";
echo "<h2>Email: {$usuario1->getEmail()}<br></h2>";
foreach ($usuario1->getCelular() as $celular) {
    echo "<h2>{$celular->getDdd()} {$celular->getNumero()}<br></h2>";
}
?>