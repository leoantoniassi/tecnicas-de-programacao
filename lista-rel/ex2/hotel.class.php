<?php
class Hotel
{
    private string $cnpj;
    private string $razao_social;
    private array $quartos = [];

    public function __construct(string $cnpj, string $razao_social)
    {
        $this->cnpj = $cnpj;
        $this->razao_social = $razao_social;
    }

    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): void
    {
        $this->cnpj = $cnpj;
    }

    public function getRazaoSocial(): string
    {
        return $this->razao_social;
    }

    public function setRazaoSocial(string $razao_social): void
    {
        $this->razao_social = $razao_social;
    }

    public function getQuartos(): array
    {
        return $this->quartos;
    }

    public function adicionarQuarto(Quartos $quarto): void
    {
        $this->quartos[] = $quarto;
    }
}
?>