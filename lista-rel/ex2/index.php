<?php
require_once "pessoa.class.php";
require_once "hospede.class.php";
require_once "funcionario.class.php";
require_once "hotel.class.php";
require_once "quartos.class.php";
require_once "reserva.class.php";

$hotel = new Hotel("12.345.678/0001-90", "Hotel Jaú");
$quarto1 = new Quartos(101, 1);
$hotel->adicionarQuarto($quarto1);
$hospede = new Hospede("Ana", "123.456.789-00");
$funcionario = new Funcionario("Carlos", "987654");

$reserva = new Reserva(
    "10/05/2024",
    "15/05/2024",
    "20/05/2024",
    $hospede,
    $funcionario,
    $quarto1
);

echo "<h1>Dados da Reserva</h1>";
echo "<p>Data da Reserva: " . $reserva->getDataReserva() . "</p>";
echo "<p>Data de Entrada: " . $reserva->getDataEntrada() . "</p>";
echo "<p>Data de Saída: " . $reserva->getDataSaida() . "</p>";
echo "<p>Hóspede: " . $reserva->getHospede()->getNome() . " (CPF: " . $reserva->getHospede()->getCpf() . ")</p>";
echo "<p>Funcionário: " . $reserva->getFuncionario()->getNome() . " (Carteira: " . $reserva->getFuncionario()->getCarteiraProfissional() . ")</p>";
echo "<p>Quarto: " . $reserva->getQuarto()->getNumero() . " (Andar: " . $reserva->getQuarto()->getAndar() . ")</p>";
echo "<p>Hotel: " . $hotel->getRazaoSocial() . " (CNPJ: " . $hotel->getCnpj() . ")</p>";
?>