<!-- instancie um obj da classe Orçamento e mostre todos os dados desse obj sem utilizar var_dump -->

<?php
require_once "aparelho.class.php";
require_once "cliente.class.php";
require_once "modelo.class.php";
require_once "orcamento.class.php";
require_once "tecnico.class.php";
require_once "telefone.class.php";

$cliente1 = new Cliente("Leonardo", "123456789-98");
$modelo1 = new Modelo("Iphone 22 pro max steel");
$aparelho1 = new Aparelho("Celular com tela quebrada");
$orcamento1 = new Orcamento("30/04/2025", 150.50, "30/09/2025");
$tecnico1 = new Tecnico("Luiz", "reparo de telas");

echo "Cliente: {$cliente1->getNome()}<br>
CPF do cliente: {$cliente1->getCpf()}<br><br>";

echo "Celular do cliente: {$modelo1->getModelo()}<br><br>";

echo "Motivo: {$aparelho1->getAparelho()}<br><br>";

echo "data do orçamento: {$orcamento1->getOrcamento()}<br> 
valor do orçamento: R$ {$orcamento1->getPreco()}<br>
validade da manutenção: {$orcamento1->getValidade()}<br><br>";

echo "Tecnico responsável: {$tecnico1->getNome()}<br>
Especialidade: {$tecnico1->getEspecialidade()}";
?>