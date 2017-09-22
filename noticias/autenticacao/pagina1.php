<?php
// page1.php

session_start();

echo 'Bem vindo a pagina #1';

$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();

// Funciona se o cookie de sessão foi aceito
echo '<br /><a href="pagina2.php">pagina 2</a>';

// Ou talvez passando o ID da sessão se necessário
echo '<br /><a href="pagina2.php?' . SID . '">pagina 2</a>';
?>