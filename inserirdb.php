<?php
	
	require_once('config.inc.php');

	$titulo    = $_POST['titulo'];
	$subtitulo = $_POST['subtitulo'];
	$texto     = $_POST['texto'];

	$sql = "INSERT INTO admin(titulo,subtitulo,texto) VALUES('$titulo','$subtitulo','$texto')";

	if(mysqli_query($conexao,$sql)){
	    echo "<h3>Seção Cadastrada com sucesso!</h3>";
	}else{
	    echo "Ocorreu um erro ao cadastrar no banco de dados. Tente Novamente</a>";
	}

?>