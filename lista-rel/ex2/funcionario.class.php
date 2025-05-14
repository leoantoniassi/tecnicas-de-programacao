<?php
require_once "pessoa.class.php";

class Funcionario extends Pessoa {
    private string $carteira_profissional;

    public function __construct(string $nome, string $carteira_profissional) {
        parent::__construct($nome);
        $this->carteira_profissional = $carteira_profissional;
    }

    public function getCarteiraProfissional(): string {
        return $this->carteira_profissional;
    }

    public function setCarteiraProfissional(string $carteira_profissional): void {
        $this->carteira_profissional = $carteira_profissional;
    }
}
?>