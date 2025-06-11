<?php
require_once "cabecalho.php";

if (isset($_GET["msg"])) {
	echo "<h3>{$_GET["msg"]}</h3>";
}
?>
<div class="content">
	<div class="container">
		<br><br>
		<h1>Lista de Categorias</h1><br>
		<br><a href="index.php?controle=categoriaController&metodo=inserir"
			class="btn btn-success">Nova Categoria</a>
		<table class="table table-striped">
			<tr>
				<th>Código</th>
				<th>Categoria</th>
				<th>Ações</th>
			</tr>
			<?php
			foreach ($retorno as $dado) {
				echo "<tr>
							<td>{$dado->id_categoria}</td>
							<td>{$dado->descritivo}</td>
							<td>
								<a href='index.php?controle=categoriaController&metodo=alterar&id={$dado->id_categoria}' class='btn btn-warning'>Alterar</a>
								
								&nbsp;&nbsp;
								
								<a href='index.php?controle=categoriaController&metodo=excluir&id={$dado->id_categoria}' class='btn btn-danger'>Excluir</a>
						  </tr>";
			} //fim do foreach
			?>
		</table>
		
	</div>
</div>
</body>
</html>