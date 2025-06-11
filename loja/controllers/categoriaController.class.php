<?php
require_once "Models/Conexao.class.php";
require_once "Models/categoriaDAO.class.php";
require_once "Models/Categoria.class.php";
class categoriaController
{
	public function listar()
	{
		//buscar os dados no banco
		$categoriaDAO = new categoriaDAO();
		$retorno = $categoriaDAO->buscar_todas();
		require_once "views/listar_categorias.php";
		//mostra a view
	} //fim do método listar
	public function inserir()
	{
		$erro = "";
		if ($_POST) {
			//verificar se descrição preenchida
			if (empty($_POST["descritivo"])) {
				$erro = "Preencha o descritivo";
			} else {
				//inserir a nova categoria no bd
				$categoria = new Categoria(0, $_POST["descritivo"]);

				$categoriaDAO = new categoriaDAO();
				$retorno = $categoriaDAO->inserir($categoria);
				header("location:index.php?controle=categoriaController&metodo=listar&msg=$retorno");
			}
		}
		require_once "Views/form_categoria.php";
	}
	public function alterar()
	{
		$erro = "";
		if ($_POST) {
			//verificar se descrição preenchida
			if (empty($_POST["descritivo"])) {
				$erro = "Preencha o descritivo";
			} else {
				//Alterar a categoria no bd
				$categoria = new Categoria($_POST["id_categoria"], $_POST["descritivo"]);

				$categoriaDAO = new categoriaDAO();
				$retorno = $categoriaDAO->alterar($categoria);
				header("location:index.php?controle=categoriaController&metodo=listar&msg=$retorno");
			}
		}
		if ($_GET["id"]) {
			$categoria = new Categoria($_GET["id"]);
			$categoriaDAO = new categoriaDAO();
			$retorno = $categoriaDAO->buscar_uma_categoria($categoria);
			require_once "views/edit_categoria.php";
		}
	}

	public function excluir()
	{
		if (isset($_GET["id"])) 
		{
			$categoria = new Categoria(($_GET["id"]));
			$categoriaDAO = new categoriaDAO();
			$retorno = $categoriaDAO->excluir($categoria);
			header("location:index.php?controle=categoriaController&metodo=listar&msg=$retorno");
		}
	}
} //fim da classe
