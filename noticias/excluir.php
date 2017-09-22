<?php 

//Conexão com o MySQL
$conexao = mysqli_connect("localhost","root", "", "portal") or die ("A conexão não foi executada com sucesso");

//CAPTURAR O VALOR PARA $id
$id = $_REQUEST['id'];
$consulta = "DELETE FROM noticias WHERE id='$id'"; 
$resultado = mysqli_query($conexao, $consulta) or die ("Não foi possível realizar a exclusão dos dados."); 
echo "<h1>A notícia foi excluída com êxito!</h1>"; 
//Aqui você pode colocar um link para voltar para a página anterior
?> 
