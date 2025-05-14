<?php
class Telefone
{
    private string $ddd;
    private string $numero;
    private Pessoa $pessoa;

    public function __construct(string $ddd, string $numero, Pessoa $pessoa)
    {
        $this->ddd = $ddd;
        $this->numero = $numero;
        $this->pessoa = $pessoa;
    }

    public function getDdd(): string
    {
        return $this->ddd;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function getPessoa(): Pessoa
    {
        return $this->pessoa;
    }

    public function setDdd(string $ddd): void
    {
        $this->ddd = $ddd;
    }

    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    public function setPessoa(Pessoa $pessoa): void
    {
        $this->pessoa = $pessoa;
    }
}
?>