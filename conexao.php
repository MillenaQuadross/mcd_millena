<?php

 $pdo = new PDO("mysql:dbname=Mercado;host=localhost:3306","root","nova_senha");

 if ($pdo) {
    echo "Banco Conectado!";
 }
?>
