<?php
class Aparelho
{
    private string $descritivo;
    private Modelo $modelo;
    private Cliente $cliente;

    public function __construct(string $descritivo = "", Modelo $modelo, Cliente $cliente)
    {
        $this->descritivo = $descritivo;
        $this->modelo = $modelo;
        $this->cliente = $cliente;
    }

    public function getDescritivo(): string
    {
        return $this->descritivo;
    }

    public function setDescritivo(string $descritivoAparelho): void
    {
        $this->descritivo = $descritivoAparelho;
    }

    public function getModelo(): Modelo
    {
        return $this->modelo;
    }

    public function setModelo(Modelo $modeloAparelho): void
    {
        $this->modelo = $modeloAparelho;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function setCliente(Cliente $clienteAparelho): void
    {
        $this->cliente = $clienteAparelho;
    }
}
?>