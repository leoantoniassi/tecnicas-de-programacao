<!-- Usa-se class.php para salvar um documento que contem uma classe -->
<?php
class Cliente
    {
        public string $nome;
        public string $cpf;
        public string $celular;
    }

    $cliente1 = new Cliente();
    $cliente1 -> nome = 'Liro'; //nome é um atributo do objeto Cliente
    $cliente1 -> cpf  = '123.456.789.98';
    $cliente1 -> celular  = '14 999999999';

    $cliente2 = new Cliente();
    $cliente2 -> nome = 'Lico'; //nome é um atributo do objeto Cliente
    $cliente2 -> cpf  = '123.456.789.97';
    $cliente2 -> celular  = '14 999999998';
    
    echo "<pre>";
    var_dump($cliente1);
    echo"<br>";
    var_dump($cliente2);
    echo "</pre>";
?>