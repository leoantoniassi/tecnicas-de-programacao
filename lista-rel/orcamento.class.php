<?php

require_once "aparelho.class.php";
require_once "tecnico.class.php";

class Orcamento
{

    public function __construct(
        private string $data_orcamento = "",
        private float $preco = 0.00,
        private string $data_validade = ""
    ) {}

    public function getOrcamento()
    {
        return $this->data_orcamento;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function getValidade()
    {
        return $this->data_validade;
    }
}
?>