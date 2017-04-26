<?php

$id =           $_POST['id'];
$titulo =       $_POST['titulo'];
$subtitulo =    $_POST['subtitulo'];
$texto =        $_POST['texto'];

$sql = "UPDATE admin SET titulo='$titulo', subtitulo='$subtitulo', texto='$texto' WHERE id = $id";

if(mysqli_query($conexao, $sql)){
    echo "<h3>Cadastrada com sucesso!</h3>";
    echo "<a href='?pg=listar'>Voltar</a>";
}else{
	echo "Ocorreu um erro ao atualizar dados no banco de dados.";
	echo "<a href='?pg=listar'>Voltar</a>";
}
?>