<?php
class produtoDAO extends Conexao
{
	public function __construct()
	{
		parent::__construct();
	}

	public function inserir($produto)
	{
		$sql = "INSERT INTO produtos (nome, descricao, preco, imagem, estoque, id_categoria) VALUES(?,?,?,?,?,?)";
		//preparar frase
		$stm = $this->db->prepare($sql);
		//substituir o ponto de interrogação
		$stm->bindValue(1, $produto->getNome());
		$stm->bindValue(2, $produto->getDescricao());
		$stm->bindValue(3, $produto->getPreco());
		$stm->bindValue(4, $produto->getImagem());
		$stm->bindValue(5, $produto->getEstoque());
		$stm->bindValue(6, $produto->getCategoria()->getid_categoria());
		//executar a frase sql
		$stm->execute();
		//fechar a conexão
		$this->db = null;
	}
	public function alterar($produto)
	{
		$sql = "UPDATE produtos SET nome = ?, descricao = ?, preco = ?, imagem = ?, estoque = ?, id_categoria = ? WHERE idproduto = ?";
		$stm = $this->db->prepare($sql);
		$stm->bindValue(1, $produto->getNome());
		$stm->bindValue(2, $produto->getDescricao());
		$stm->bindValue(3, $produto->getPreco());
		$stm->bindValue(4, $produto->getImagem());
		$stm->bindValue(5, $produto->getEstoque());
		$stm->bindValue(6, $produto->getCategoria()->getid_categoria());
		$stm->bindValue(7, $produto->getIdproduto());
		$stm->execute();
		$this->db = null;
	}

	public function excluir($produto)
	{
		$sql = "DELETE FROM produtos WHERE idproduto = ?";
		$stm = $this->db->prepare($sql);
		$stm->bindValue(1, $produto->getIdproduto());
		$stm->execute();
		$this->db = null;
		return "Produto excluido com sucesso";
	}

	public function buscar_todos()
	{
		//frase sql que será executada
		$sql = "SELECT p.*, c.descritivo FROM produtos as p, categorias as c WHERE p.id_categoria = c.id_categoria";
		try{
		//preparar frase
		$stm = $this->db->prepare($sql);
		//executar a frase sql
		$stm->execute();
		//fechar a conexão
		$this->db = null;
		//retornar o resultado da execução da frase sql
		return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(PDOException $e)
		{
			$this->db = null;
			return "Problema ao buscar todos os produtos";
		}
	}
	public function buscar_um($produto)
	{
		$sql = "SELECT * FROM produtos WHERE idproduto = ?";

		$stm = $this->db->prepare($sql);
		$stm->bindValue(1, $produto->getIdproduto());
		$stm->execute();
		$this->db = null;
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}
	public function buscar_produtos_por_categoria($produto)
	{
		$sql = "SELECT * FROM produtos WHERE id_categoria = ?";

		$stm = $this->db->prepare($sql);
		$stm->bindValue(1, $produto->getCategoria()->getId_categoria());
		$stm->execute();
		$this->db = null;
		return $stm->fetchAll(PDO::FETCH_OBJ);
	}
} //fim da classe produtoDAO
