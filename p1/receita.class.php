<?php
class Receita
{
    private string $nome;
    private string $descritivo;

    public function __construct(string $descritivo = "", string $nome = "")
    {
        $this->descritivo = $descritivo;
        $this->nome = $nome;
    }

    public function getDescritivo(): string
    {
        return $this->descritivo;
    }

    public function setDescritivo(string $descritivo): void
    {
        $this->descritivo = $descritivo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
}
?>