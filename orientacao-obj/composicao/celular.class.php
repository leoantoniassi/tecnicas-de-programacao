<?php
class Celular
{
    public function __construct(private int $ddd = 0, private string $numero = '') {}

    public function getDdd()
    {
        return $this->ddd;
    }

    public function getNumero()
    {
        return $this->numero;
        
    }
}
?>