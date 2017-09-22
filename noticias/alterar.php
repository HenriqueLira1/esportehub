<?php 
//CAPTURAR O VALOR PARA $id
$id = $_REQUEST['id'];

//Conexão com o MySQL
$conexao = mysqli_connect("localhost","root", "", "portal") or die ("A conexão não foi executada com sucesso");

$consulta = "SELECT * FROM noticias WHERE id='$id' "; 
$resultado = mysqli_query($conexao, $consulta) or die ("Não foi possível realizar a consulta ao banco de dados"); 

while ($linha=mysqli_fetch_array($resultado)) { 
$id = $linha["id"]; 
$nome = $linha["nome"]; 
$sobrenome = $linha["sobrenome"]; 
$cidade = $linha["cidade"]; 
$estado = $linha["estado"]; 
$email = $linha["email"]; 
$data = $linha["data"]; 
$hora = $linha["hora"]; 
$titulo = $linha["titulo"]; 
$subtitulo = $linha["subtitulo"]; 
$texto = $linha["texto"]; 
$ver = $linha["ver"]; 

$novadata = substr($data,8,2) . "/" .substr($data,5,2) . "/" . substr($data,0,4); 
$novahora = substr($hora,0,2) . "h" .substr($hora,3,2) . "min"; 

echo '<h1>Alterar Cadastro...</h1>'; 
echo '<hr><br>'; 
echo '<form action="alterar_db.php" method="POST">'; 
echo '<input name="id" type="hidden" value="'.$id.'" size=20>'; 
echo "Data: $novadata<br>"; 
echo "Hora: $novahora<br>"; 
echo 'Nome:<input name="nome" type="text" value="'.$nome.'" size=30> *<br>'; 
echo 'Sobrenome:<input name="sobrenome" type="text" value="'.$sobrenome.'" size=30> *<br>'; 
echo 'Cidade:<input name="cidade" type="text" value="'.$cidade.'" size=30> *<br>'; 
echo 'Estado:<i>(Exemplo: SP, RS, BA)</i><input name="estado" type="text" 
value="'.$estado.'" size=5> *<br>'; 
echo 'Email: <i>(Exemplo: teste@yahoo.com)</i><input name="email" type="text" 
value="'.$email.'" size=30><br><br>'; 
echo 'Título do Texto:<input name="titulo" type="text" value="'.$titulo.'" size=30> *<br>'; 
echo 'Subtítulo do Texto:<textarea name="subtitulo" rows=5 cols=30>'.$subtitulo.'</textarea><br>'; 
echo 'Texto:<textarea name="texto" rows=10 cols=30>'.$texto.'</textarea> *<br>'; 
echo 'Disponibilizar? (1 ou 0): <input name="ver" type="text" value="'.$ver.'" size="1"><br>'; 
echo '<input type="submit" value="Alterar">'; 
echo "</form>"; 
echo "<br><hr>"; 
} 

?> 
