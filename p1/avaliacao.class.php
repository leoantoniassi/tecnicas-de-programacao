<?php

require_once "receita.class.php";
require_once "chef.class.php";

class Avaliacao
{
    private float $nota;
    private ?Chef $chef;
    private ?Receita $receita;

    public function __construct(
        float $nota = 0.0,
        ?Chef $chef = null,
        ?Receita $receita = null
    ) {
        $this->nota = $nota;
        $this->chef = $chef;
        $this->receita = $receita;
    }

    public function getNota()
    {
        return $this->nota;
    }

    public function setNota(float $nota): void
    {
        $this->nota = $nota;
    }
    
    public function getChef(): ?Chef
    {
        return $this->chef;
    }

    public function setChef(Chef $chef): void
    {
        $this->chef = $chef;
    }

    public function getReceita(): ?Receita
    {
        return $this->receita;
    }

    public function setReceita(Receita $receita): void
    {
        $this->receita = $receita;
    }
}
?>