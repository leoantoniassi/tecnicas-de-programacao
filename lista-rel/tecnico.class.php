<?php
class Tecnico
{
    public function __construct(private string $nome = "", private string $especialidade = "") {}

    public function getEspecialidade()
    {
        return $this->especialidade;
    }
    public function getNome()
    {
        return $this->nome;
    }
}
?>