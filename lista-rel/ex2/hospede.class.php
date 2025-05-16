<?php
require_once "pessoa.class.php";

class Hospede extends Pessoa
{
    private string $cpf;

    public function __construct(string $nome, string $cpf)
    {
        parent::__construct($nome);
        $this->cpf = $cpf;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }
}
?>