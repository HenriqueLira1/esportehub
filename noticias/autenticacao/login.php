<?php
// obt�m os valores digitados
$usuario = $_REQUEST["usuario"];
$senha = $_REQUEST["senha"];

// acesso ao banco de dados
include 'config.php';
$consulta = "SELECT usuario,senha FROM usuarios where usuario='$usuario'";
$resultado = mysqli_query($conexao, $consulta);

$linha = mysqli_fetch_array($resultado);

if($linha==0)  // testa se a consulta retornou algum registro
{
	echo "<html><body>";
	echo "<p align=\"center\">Usu�rio n�o encontrado!</p>";
	echo "<p align=\"center\"><a href=\"login.html\">Voltar</a></p>";
	echo "</body></html>";
}
else
{
   	if ($senha != $linha['senha']) // confere senha
	{
		echo "<html><body>";
		echo "<p align=\"center\">A senha est� incorreta!</p>";
		echo "<p align=\"center\"><a href=\"login.html\">Voltar</a></p>";
		echo "</body></html>";
	}
	else   // usu�rio e senha corretos. Vamos criar os cookies
    {
        setcookie("nome_usuario", $usuario);
        setcookie("senha_usuario", $senha);
        // direciona para a p�gina inicial dos usu�rios cadastrados
        header ("Location: pagina_inicial.php");
    }
}


?>

