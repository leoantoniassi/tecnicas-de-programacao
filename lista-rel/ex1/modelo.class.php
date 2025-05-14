<?php
class Modelo
{
    private string $descritivo;

    public function __construct(string $descritivo = "")
    {
        $this->descritivo = $descritivo;
    }

    public function getDescritivo(): string
    {
        return $this->descritivo;
    }

    public function setDescritivo(string $descritivo): void
    {
        $this->descritivo = $descritivo;
    }
}
?>