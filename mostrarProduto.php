<?php
require 'conexao.php';

$sql = $pdo->query("SELECT * FROM produto");
$ler = [];

if($sql->rowCount()>0){
    $ler = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Mercado</h1>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>PRODUTO</th>
            <th>QUANTIDADE</th>
            <th>PREÇO</th>
        </tr>
        <?php foreach($ler as $dados): ?>

            <tr>
                <td><?php echo $dados['id']; ?></td>
                <td><?php echo $dados['produto'] ?></td>
                <td><?php echo $dados['quant'] ?></td>
                <td><?php echo $dados['preco'] ?></td>
                <td>
                    <a href="editar.php?id<?php $dados['id']; ?>">[EDITAR]</a>
                    <a href="deletar.php?id<?php $dados['id']; ?>">[EXCLUIR]</a>
                </td>
            </tr>
        <?php endforeach; ?>    
    </table>
</body>
</html>