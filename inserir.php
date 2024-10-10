<?php
    require 'conexao.php';
    $produto = $_POST['produto'];
    $quant = $_POST['quantidade'];
    $preco = $_POST['preco'];

    $sql = $pdo->prepare("INSERT INTO produto (produto, quantidade, preco) VALUES (:produto,:quantidade,:preco)");
    $sql->bindValue('produto', $produto);
    $sql->bindValue('quantidade', $quantidade);
    $sql->bindValue('preco', $preco);

    $sql->execute();

    header("Location:index.php");
?>

