<?php
class Usuarios
{
    public function __construct(
        private int $id_usuario = 0,
        private string $nome = "",
        private string $email = "",
        private string $tipo = ""
    ) {}

    public function getId_usuario(): int {
        return $this->id_usuario;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function getTipo(): string {
        return $this->tipo;
    }
}
