<?php
class Pessoa
{
    public function __construct(private string $nome = "", private string $nacionalidade = "") {}

    public function getNome()
    {
        return $this->nome;
    }
}
?>