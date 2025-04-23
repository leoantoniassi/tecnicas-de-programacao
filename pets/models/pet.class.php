<?php
class Pet
{
    public function __construct(private string $nome = '',
    private int $idade = 0, private string $cor = '', 
    private string $raca = '')
    {}

    //Métodos Get 
    public function getNome()
    {
        return $this -> nome;
    }
    public function getIdade()
    {
        return $this -> idade;
    }
    public function getCor()
    {
        return $this -> cor;
    }
    public function getRaca()
    {
        return $this -> raca;
    }
    // Métodos sets

    public function setNome()
    {
        return $this -> nome;
    }
    public function setIdade()
    {
        return $this -> idade;
    }
    public function setCor()
    {
        return $this -> cor;
    }
    public function setRaca()
    {
        return $this -> raca;
    }
}
$msg = array('','','','');
    $erro = false;
    if($_POST)
    {
        if(empty($_POST['nome']))
        {
            $msg[0] = 'preencha o nome';
            $erro = true;
        }
        if(empty($_POST['idade']))
        {
            $msg[1] = 'preencha a idade';
            $erro = true;
        }
        if(empty($_POST['cor']))
        {
            $msg[2] = 'preencha a cor';
            $erro = true;
        }
        if(empty($_POST['raca']))
        {
            $msg[3] = 'escolha a raça';
            $erro = true;
        }

        if(!$erro)
        {
            $pet = new Pet($_POST['nome'], $_POST['idade'],
             $_POST['cor'], $_POST['raca']);
             //Mostrar os dados
             echo "<h2>Dados do Pet</h2>";
             echo "Nome: {$pet->getNome()}<br>";
             echo "Idade: {$pet->getIdade()}<br>";
             echo "Cor: {$pet->getCor()}<br>";
             echo "Raça: {$pet->getRaca()}<br>";
        }
    }
?>