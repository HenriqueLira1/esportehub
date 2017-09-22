<!doctype html>
<html>
	<head>
	<title>Formulário</title></head>
	<body>
	<meta charset="UTF-8">
	<?php 

//Vamos definir as variáveis de data e hora para inserção no banco de dados 

//Agora com as variáveis de data e hora criadas vamos criar uma variável especial para a consulta sql 
// OBS: CAPTURAR AS VARIAVEIS COM $_REQUEST['nome_variavel'] ANTES , SENÃO NÃO FUNCIONA
$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['estado'];
$email = $_REQUEST['email'];
$data = $_REQUEST['data'];
$hora = $_REQUEST['hora'];
$titulo = $_REQUEST['titulo'];
$subtitulo = $_REQUEST['subtitulo'];
$texto = $_REQUEST['texto'];

$consulta = "INSERT INTO noticias (nome, sobrenome, cidade, estado, email, data, hora, titulo, subtitulo, texto) VALUES ('$nome', '$sobrenome', '$cidade', '$estado', '$email', '$data', '$hora', '$titulo', '$subtitulo', '$texto')"; 

//Agora é hora estabelecer uma conexão com o mysql 
$conexao = mysqli_connect("localhost","root", "", "portal") or die ("A conexão não foi executada com sucesso");

//Inserindo os dados 
$resultado = mysqli_query($conexao, $consulta) or die ("Houve erro na gravação dos dados, por favor, clique em voltar e verifique os campos obrigatórios!"); 
echo "<h1>Cadastro efetuado com sucesso!</h1>"; 

?> 
				

	
	
	</body>	
	



</html>