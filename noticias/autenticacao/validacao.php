<?php
if(Isset($_COOKIE["nome_usuario"]))
    $nome_usuario = $_COOKIE["nome_usuario"];
if(IsSet($_COOKIE["senha_usuario"]))
    $senha_usuario = $_COOKIE["senha_usuario"];

if(!(empty($nome_usuario) OR empty($senha_usuario)))
{
    include 'config.php';
	$consulta = "SELECT usuario,senha FROM usuarios where usuario='$nome_usuario'";
	$resultado = mysqli_query($conexao, $consulta);
	$linha = mysqli_fetch_array($resultado);
	if(mysqli_num_rows($resultado)==1)
	{
		if($senha_usuario != $linha['senha'])
		{
            setcookie("nome_usuario");
            setcookie("senha_usuario");
            echo "Você não efetuou o LOGIN!";
            exit;
        }
    }
    else
    {

        setcookie("nome_usuario");
        setcookie("senha_usuario");
        echo "Você não efetuou o LOGIN!";
        exit;
    }
}
else
{

    echo "Você não efetuou o LOGIN!";
    exit;
}


?>

