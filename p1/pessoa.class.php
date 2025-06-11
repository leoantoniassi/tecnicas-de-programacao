<?php
abstract class Pessoa
{
    protected string $nome;
    protected array $telefone = [];

    public function __construct(string $nome = "", int $ddd = 0, string $numero = "")
    {
        $this->nome = $nome;
        $this->telefone[] = new Telefone($ddd, $numero, $this);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getTelefone(): array
    {
        return $this->telefone;
    }

    public function setTelefone(int $ddd, string $numero): void
    {
        $this->telefone[] = new Telefone($ddd, $numero, $this);
    }
}
?>