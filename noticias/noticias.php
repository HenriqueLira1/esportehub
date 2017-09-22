<?php 

//Conexão com o MySQL
$conexao = mysqli_connect("localhost","root", "", "portal") or die ("A conexão não foi executada com sucesso");

//Criação da Consulta
$consulta = "SELECT * FROM noticias WHERE ver = 1 ORDER BY id DESC LIMIT 15"; 
// Irá selecionar as últimas 15 notícias inseridas 
// Só serão selecionados os registros em que  ver=1, configurando o controle de exibição das notícias
// Por padrão o MySQL colocou nao, mas o administrador terá que revisar as notícias e alterar o campo ver para aquelas que quiser validar. 

$resultado = mysqli_query($conexao, $consulta) or die ("Não foi possível realizar a consulta ao banco de dados"); 

// Agora iremos "obter" cada campo da notícia e organizar no HTML 

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

echo "<b>Código da Notícia</b>: $id"; 
echo "<br>"; 
echo "Autor: $nome $sobrenome - ($email)"; 
echo "<br>"; 
echo "Cidade: $cidade - Estado: $estado"; 
echo "<br>"; 
echo "Data: $novadata - Horário: $novahora"; 
echo "<br>"; 
echo "Título da Notícia: $titulo"; 
echo "<br>"; 
echo "Subtítulo da Notícia: <i> $subtitulo </i>"; 
echo "<br>"; 
echo "Notícia: $texto"; 
echo "<br>"; 
echo "Validado pelo Administrador: "; 
if ($ver==1) { echo "Sim"; } else { echo "Não"; } 
echo "<hr>"; 

} 

?> 