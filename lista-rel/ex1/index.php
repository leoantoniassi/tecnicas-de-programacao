<?php

require_once "pessoa.class.php";
require_once "aparelho.class.php";
require_once "cliente.class.php";
require_once "modelo.class.php";
require_once "orcamento.class.php";
require_once "tecnico.class.php";
require_once "telefone.class.php";

$tecnico1 = new Tecnico("João", 14, '999999999', "Técnico de celular");
$tecnico1->setTelefone(14, '999999998');
$cliente1 = new Cliente('Leonardo', '123.456.789-00', 14, '999999997');
$cliente1->setTelefone(14, '999999996');
$modelo1 = new Modelo('iPhone 15 Pro Max');
$aparelho1 = new Aparelho('iPhone', $modelo1, $cliente1);

$orcamento1 = new Orcamento(
    '07/05/2024',
    100.00,
    '07/05/2025',
    $tecnico1,
    $aparelho1
);

echo "<h1>Orçamento</h1><br>";
echo "Data do orçamento: {$orcamento1->getDataOrcamento()}<br>";
echo "Validade do orçamento: {$orcamento1->getValidade()}<br>";
echo "Valor Total: R$ {$orcamento1->getPreco()}<br>";
echo "Técnico Responsável: {$orcamento1->getTecnico()->getNome()} - Especialidade: {$orcamento1->getTecnico()->getEspecialidade()}<br>";
echo "Telefone do Técnico: (" . $orcamento1->getTecnico()->getTelefone()[0]->getDdd() . ") " . $orcamento1->getTecnico()->getTelefone()[0]->getNumero() . "<br>";
echo "<br>";
echo "Aparelho: {$orcamento1->getAparelho()->getDescritivo()}<br>";
echo "Modelo: {$orcamento1->getAparelho()->getModelo()->getDescritivo()}<br>";
echo "Cliente: {$orcamento1->getAparelho()->getCliente()->getNome()} - CPF: {$orcamento1->getAparelho()->getCliente()->getCpf()}<br>";
echo "Telefone do Cliente: (" . $orcamento1->getAparelho()->getCliente()->getTelefone()[0]->getDdd() . ") " . $orcamento1->getAparelho()->getCliente()->getTelefone()[0]->getNumero() . "<br>";
?>