<?php
class Cliente
{
    public function __construct(private string $nome = "",private string $cpf = "") {}

    public function getNome()
    {
        return $this->nome;
    }
    
    public function getCpf()
    {
        return $this->cpf;
    }
}
?>