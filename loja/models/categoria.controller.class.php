<?php
require_once "models/conexao.class.php";
require_once "models/categoriaDAO.class.php";
require_once "models/Categoria.class.php";
class categoriaController
{
    public function listar()
    {
        //buscar dados no BD
        $categoriaDAO = new categoriaDAO();
        $retorno = $categoriaDAO->buscar_todas();
        require_once "views/listar_categorias.php";
    } //Fim do método listar


    //insere dados no BD
    public function inserir()
    {
        $erro = "";
        if ($_POST) {
            //verificar se a descrição foi preenchida
            if (empty($_POST["descritivo"])) {
                $erro = "Preencha o descritivo";
            } else {
                //inserir a nova categoria no BD
                $categoria = new Categoria(descritivo: $_POST["descritivo"]);

                $categoriaDAO = new categoriaDAO();
                $retorno = $categoriaDAO->inserir($categoria);
                header("location:index.php?controle=categoriaController&metodo=listar&msg=$retorno");
            }
        }
        require_once "views/listar_categorias.php";
    }
}
?>