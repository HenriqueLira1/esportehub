<?php
// page2.php

session_start();

echo 'Bem vindo à página #2<br />';

echo $_SESSION['favcolor']; // green
echo $_SESSION['animal'];   // cat
echo date('Y m d H:i:s', $_SESSION['time']);

// Você pode querer usar o SID aqui, como fizemos na pagina1.php
echo '<br /><a href="pagina1.php">página 1</a>';
?>