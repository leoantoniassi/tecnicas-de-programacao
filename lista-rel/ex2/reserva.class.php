<?php
class Reserva
{
    private string $data_reserva;
    private string $data_entrada;
    private string $data_saida;
    private Hospede $hospede;
    private Funcionario $funcionario;
    private Quartos $quarto;

    public function __construct(
        string $data_reserva,
        string $data_entrada,
        string $data_saida,
        Hospede $hospede,
        Funcionario $funcionario,
        Quartos $quarto
    ) {
        $this->data_reserva = $data_reserva;
        $this->data_entrada = $data_entrada;
        $this->data_saida = $data_saida;
        $this->hospede = $hospede;
        $this->funcionario = $funcionario;
        $this->quarto = $quarto;
    }

    public function getDataReserva()
    {
        return $this->data_reserva;
    }

    public function setDataReserva(string $data_reserva)
    {
        $this->data_reserva = $data_reserva;
    }

    public function getDataEntrada()
    {
        return $this->data_entrada;
    }

    public function setDataEntrada(string $data_entrada)
    {
        $this->data_entrada = $data_entrada;
    }

    public function getDataSaida()
    {
        return $this->data_saida;
    }

    public function setDataSaida(string $data_saida)
    {
        $this->data_saida = $data_saida;
    }

    public function getHospede(): Hospede
    {
        return $this->hospede;
    }

    public function setHospede(Hospede $hospede)
    {
        $this->hospede = $hospede;
    }

    public function getFuncionario(): Funcionario
    {
        return $this->funcionario;
    }

    public function setFuncionario(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
    }

    public function getQuarto(): Quartos
    {
        return $this->quarto;
    }

    public function setQuarto(Quartos $quarto)
    {
        $this->quarto = $quarto;
    }
}
?>