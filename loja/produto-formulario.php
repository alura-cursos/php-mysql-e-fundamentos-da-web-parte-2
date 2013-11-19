<?php include("cabecalho.php"); 
include("conecta.php");
include("banco-categoria.php");

$categorias = listaCategorias($conexao);
?>			
	<h1>Formulário de produto</h1>
	<form action="adiciona-produto.php" method="post">
		<table class="table">
			<tr>
				<td>Nome</td>
				<td> <input class="form-control" type="text" name="nome"></td>
			</tr>
			<tr>
				<td>Preço</td>
				<td><input  class="form-control" type="number" name="preco"></td>
			</tr>
			<tr>
				<td>Descrição</td>
				<td><textarea class="form-control" name="descricao"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="usado" value="true"> Usado
			</tr>
			<tr>
				<td>Categoria</td>
				<td>
					<select name="categoria_id" class="form-control">
					<?php foreach($categorias as $categoria) : ?>
						<option value="<?=$categoria['id']?>">
								<?=$categoria['nome']?>
						</option>
					<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<button class="btn btn-primary" type="submit">Cadastrar</button>
				</td>
			</tr>
		</table>
	</form>
<?php include("rodape.php"); ?>			
