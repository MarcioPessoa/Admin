<?php

$id = $_GET['id'];
$sql = "SELECT * FROM admin WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)):
    
?>

<form action="?pg=alterardb" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
<table>
    <tr>
        <td>Nome da Seção: </td>
        <td><input class="form-control" name="titulo" type="text" value="<?=$dados['titulo'];?>"/></td>
    </tr>
    <tr> 
        <td>SubTitulo: </td>
        <td><input class="form-control" name="subtitulo" type="text" value="<?=$dados['subtitulo'];?>"/></td>
    </tr>
    <tr>
        <td>Texto: </td>
        <td><textarea class="form-control" name="texto"><?=$dados['texto'];?></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="Enviar">Atualizar</button></td>
    </tr>
</table>
</form>
<?php 
endwhile;
?>