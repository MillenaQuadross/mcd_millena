<?php
    require 'conexao.php';
    $id = $_REQUEST['id'];

    $sql = $pdo->prepare("DELETE FROM produtos where id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

?>''
