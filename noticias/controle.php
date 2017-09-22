<?php 

//Conexão com o MySQL
$conexao = mysqli_connect("localhost","root", "", "portal") or die ("A conexão não foi executada com sucesso");
$consulta = "SELECT * FROM noticias ORDER BY id DESC"; 
$resultado = mysqli_query($conexao, $consulta) or die ("Não foi possível realizar a consulta ao banco de dados"); 

?>

<table border="1">
<tr>
<td>ID:</td>
<td width="100">Nome:</td> 
<td width="100">Sobrenome:</td>
<td width="100">Cidade:</td>
<td width="15">UF:</td>
<td width="100">Email:</td>
<td width="30">Data:</td>
<td width="30">Hora:</td>
<td width="100">Título:</td>
<td width="50">Disponível?</td> 
<td width="50">Alterar</td>
<td width="50">Excluir</td>
</tr>
<?php
while ($linha=mysqli_fetch_array($resultado)) { 
$id = $linha['id']; 
$nome = $linha['nome']; 
$sobrenome = $linha['sobrenome']; 
$cidade = $linha['cidade']; 
$estado = $linha['estado']; 
$email = $linha['email']; 
$data = $linha['data']; 
$hora = $linha['hora']; 
$titulo = $linha['titulo']; 
$ver = $linha['ver']; 

$novadata = substr($data,8,2) . "/" .substr($data,5,2) . "/" . substr($data,0,4); 
$novahora = substr($hora,0,2) . "h" .substr($hora,3,2) . "min"; 

echo "<tr>"; 
echo "<td>$id</td>"; 
echo "<td>$nome</td>"; 
echo "<td>$sobrenome</td>"; 
echo "<td>$cidade</td>"; 
echo "<td>$estado</td>"; 
echo "<td>$email</td>"; 
echo "<td>$novadata</td>"; 
echo "<td>$novahora</td>"; 
echo "<td>$titulo</td>"; 
echo "<td>$ver</td>"; 
echo "<td><a href=\"alterar.php?id=$id\">Alterar</a><br></td>"; 
echo "<td width=50><a href=\"excluir.php?id=$id\">Excluir</a><br></td>"; 
echo "</td>"; 
echo "<br>"; 

} 
echo "</table>"; 

?> 