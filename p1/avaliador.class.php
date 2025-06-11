<?php
final class Avaliador extends Pessoa
{
    private string $cpf;

    public function __construct(
        string $nome,
        string $cpf = "",
        int $ddd,
        string $numero
    ) {
        parent::__construct($nome, $ddd, $numero);
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