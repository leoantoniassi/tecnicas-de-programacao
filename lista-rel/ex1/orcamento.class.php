<?php

require_once "aparelho.class.php";
require_once "tecnico.class.php";

class Orcamento
{
    private string $data_orcamento;
    private float $preco;
    private string $data_validade;
    private ?Tecnico $tecnico;
    private ?Aparelho $aparelho;

    public function __construct(
        string $data_orcamento = "",
        float $preco = 0.00,
        string $data_validade = "",
        ?Tecnico $tecnico = null,
        ?Aparelho $aparelho = null
    ) {
        $this->data_orcamento = $data_orcamento;
        $this->preco = $preco;
        $this->data_validade = $data_validade;
        $this->tecnico = $tecnico;
        $this->aparelho = $aparelho;
    }

    public function getDataOrcamento(): string
    {
        return $this->data_orcamento;
    }

    public function setDataOrcamento(string $data_orcamento): void
    {
        $this->data_orcamento = $data_orcamento;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    public function getValidade(): string
    {
        return $this->data_validade;
    }

    public function setValidade(string $data_validade): void
    {
        $this->data_validade = $data_validade;
    }

    public function getTecnico(): ?Tecnico
    {
        return $this->tecnico;
    }

    public function setTecnico(Tecnico $tecnico): void
    {
        $this->tecnico = $tecnico;
    }

    public function getAparelho(): ?Aparelho
    {
        return $this->aparelho;
    }

    public function setAparelho(Aparelho $aparelho): void
    {
        $this->aparelho = $aparelho;
    }
}
?>