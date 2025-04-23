<?php
class Usuario
{
    private array $celulares = []; // Declaração explícita do array

    public function __construct(
        private string $nome = "",
        private string $cpf = "",
        private string $email = "",
        int $ddd,
        string $numero
    ) {
        $this->celulares[] = new Celular($ddd, $numero);
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setCelular(int $ddd, string $numero): void
    {
        $this->celulares[] = new Celular($ddd, $numero);
    }

    public function getCelular(): array
    {
        return $this->celulares;
    }
}
?>