<?php
	class Fornecedor
	{
		public function __construct(private string $cnpj = "",
									private string $razaoSocial = "",
									private Produto $produto){}
									
		public function getCnpj()
		{
			return $this -> cnpj; 
		}
		
		public function getRazaoSocial()
		{
			return $this -> razaoSocial;
		}
		
		public function getProduto()
		{
			return $this -> produto;
		}
	}
?>