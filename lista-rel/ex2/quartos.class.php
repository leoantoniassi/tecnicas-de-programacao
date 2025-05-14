<?php
class Quartos {
    private int $numero;
    private int $andar;

    public function __construct(int $numero, int $andar) {
        $this->numero = $numero;
        $this->andar = $andar;
    }

    public function getNumero(): int {
        return $this->numero;
    }

    public function setNumero(int $numero): void {
        $this->numero = $numero;
    }

    public function getAndar(): int {
        return $this->andar;
    }

    public function setAndar(int $andar): void {
        $this->andar = $andar;
    }
}
?>