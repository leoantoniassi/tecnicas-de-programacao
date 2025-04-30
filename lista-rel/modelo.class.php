<?php
class Modelo
{
    public function __construct(private string $modelo = "") {}

    public function getModelo()
    {
        return $this->modelo;
    }
}
?>