<?php
final class Tecnico extends Pessoa
{
    private string $especialidade;

    public function __construct(
        string $nome,
        int $ddd,
        string $numero,
        string $especialidade = ""
    ) {
        parent::__construct($nome, $ddd, $numero);
        $this->especialidade = $especialidade;
    }

    public function getEspecialidade(): string
    {
        return $this->especialidade;
    }

    public function setEspecialidade(string $especialidade): void
    {
        $this->especialidade = $especialidade;
    }
}
?>