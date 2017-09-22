<?php 
//Conexão com o MySQL
$conexao = mysqli_connect("localhost","root", "", "portal") or die ("A conexão não foi executada com sucesso");

//CAPTURAR OS VALORES DAS VARIÁVEIS
$id        = $_REQUEST['id'];
$nome      = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];	
$cidade    = $_REQUEST['cidade']; 
$estado    = $_REQUEST['estado'];
$email     = $_REQUEST['email'];
$titulo    = $_REQUEST['titulo'];
$subtitulo = $_REQUEST['subtitulo'];
$texto     = $_REQUEST['texto'];
$ver       = $_REQUEST['ver'];

 $consulta = "UPDATE noticias SET nome='$nome' ,sobrenome='$sobrenome',cidade='$cidade',estado='$estado' ,email='$email',titulo='$titulo',subtitulo='$subtitulo' 
,texto='$texto',ver='$ver' WHERE id='$id' "; 
$resultado = mysqli_query($conexao, $consulta) or die ("Não foi possível realizar a consulta ao banco de dados"); 
echo "<h1>Notícia alterada com sucesso!</h1>"; 

?> 
