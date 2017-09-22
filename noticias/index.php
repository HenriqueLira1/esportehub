
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <title>ÁREA ADMINISTRATIVA</title>
</head>
<body>
	<div id="principal">
		<div id="cabecalho">
		 
		</div>
		<div id="menu">
		 <ul>
			<li><a href="index.php?pagina=noticias.php">LISTAR</a></li>
			<li><a href="index.php?pagina=controle.php">ALTERAR</a></li>
			<li><a href="index.php?pagina=cadastra.php">CADASTRAR</a></li>			
		 </ul>
		</div>
		<div id="conteudo">
		 <?php
			error_reporting(!E_NOTICE);
			if($_REQUEST['pagina'])
			include $_REQUEST['pagina'];
			else include 'noticias.php';
		 ?>
		</div>
	</div>   
</body>
</html>