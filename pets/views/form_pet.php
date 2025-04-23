<?php
    require_once "../models/pet.class.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Dog</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Dog</h1>
    <form action="#" method='post'>
        <!-- Nome -->
        <label for="nome">Digite o Nome do Seu Dog</label>
        <input type="text" name='nome' value="<?php echo $_POST['nome'] ?? ''; ?>">
        <div class="erro"><?php echo $msg[0]; ?></div>
        <br>

        <!-- Idade -->
        <br>
        <label for="idade">Digite a idade do seu Dog</label>
        <input type="text" name='idade' value="<?php echo $_POST['idade'] ?? '';?>">
        <div class="erro"><?php echo $msg[1]; ?></div>
        <br>

        <!-- Cor -->
        <br>
        <label for="cor">Digite a cor do seu Dog</label>
        <input type="text" name='cor' value="<?php echo $_POST['cor'] ?? '';?>">
        <div class="erro"><?php echo $msg[2]; ?></div>
        <br>
        
        <!-- Raça -->
        <br>
        <label for="raca">Raça</label>
        <select name="raca" id="raca_select">
            <option value="0">Escolha a raça</option>
            <option value="1" <?php if(isset($_POST['raca']) && $_POST['raca'] == "1") echo "selecionado"; ?>>Pastor Alemão</option>
            <option value="2" <?php if(isset($_POST['raca']) && $_POST['raca'] == "2") echo "selecionado"; ?>>Poodle</option>
            <option value="3" <?php if(isset($_POST['raca']) && $_POST['raca'] == "3") echo "selecionado"; ?>>Lhasa</option>         
            <option value="4" <?php if(isset($_POST['raca']) && $_POST['raca'] == "4") echo "selecionado"; ?>>Border Collie</option>
            <option value="5" <?php if(isset($_POST['raca']) && $_POST['raca'] == "5") echo "selecionado"; ?>>Vira Lata</option>
        </select>
        <div class="erro"><?php echo $msg[3]; ?></div>
        <br>
       
        <!-- Cadastrar -->
        <input type="submit" class='btn' value='Cadastrar'>
    </form>
</body>
</html>