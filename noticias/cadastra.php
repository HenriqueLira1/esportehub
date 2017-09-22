<!doctype html>
<html>
	<head>
	<title>Formulário</title></head>
	<body>
	<meta charset="UTF-8">
	<?php 
$data = date("Y-m-d"); 
$hora = date("H:i:s"); 
$novadata = substr($data,8,2) . "/" .substr($data,5,2) . "/" . substr($data,0,4); 
$novahora = substr($hora,0,2) . "h" .substr($hora,3,2) . "min"; 
?>

<h1>Sistema de Cadastro de Notícias</h1>
<hr><br>
<form action="inserir.php" method="post">
Nome:<input name="nome" type="text" size="30" required> *<br>
Sobrenome:<input name="sobrenome" type="text" size="30"> *<br>
Cidade:<input name="cidade" type="text" size=30> *<br>
Estado:<i>(Exemplo: SP, RS, BA)</i><input name="estado" type="text" size="5" maxlenght> *<br>
Email: <i>(Exemplo: teste@yahoo.com)</i><input name="email" type="email" size="30"><br>
Título do Texto:<input name="titulo" type="text" size="30"> *<br>
Subtítulo do Texto:<textarea name="subtitulo" rows="5" cols="30"></textarea><br>
Texto:<textarea name="texto" rows="10" cols="30"></textarea> *<br>
<input name="data" type="hidden" value="<?php echo $data; ?>"><input name="hora" type="hidden" value="<?php echo $hora; ?>">
<input type="submit" value="CADASTRAR">
</form>
<br><hr>
<i>Campos marcados com <b>*</b> são obrigatórios no cadastro.<br>
<b>Observação</b>: Será inserido no seu cadastro a data atual, bem como a hora atual do cadastro<br>
<?php

echo "Data: $novadata - Hora: $novahora<br>";

?> 
				//required dps

	
	
	</body>	
	



</html>