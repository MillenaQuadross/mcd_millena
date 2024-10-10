<?php 
require 'conexao.php';

//criando vetor para receber resultado da consulta
//query: serve para fazer consulta no banco
$sql = $pdo->query("SELECT * FROM produtos");

$lista = [];


//lista : é um array que recebeu todos os dados do metodo fetchall (do banco de dados)
if($sql->rowCount()>0){

    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
   
    //fetchall : pegar todos os dados em linha
    //fetch_aasoc : organizar os dados na tabela, cada dado em sua coluna certa
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
    <h1> Sistema Millena </h1>
    <table border ="3px">

    
        <tr> 
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>AÇÕES</th>
        </tr>
        <?php foreach($lista as $dados):  ?>
            
            <tr>
                <td><?php echo $dados['id']; ?></td>
                <td> <?=$dados['Nome']; // <?= shorttag ?> </td>
                <td><?php echo $dados['Email'];?></td>
                <td>
                    <a href="editar.php?id<?php $dados['id'];?>">[Editar]</a>
                    <a href="excluir.php?id<?php $dados['id'];?>">[Excluir]</a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>

</body>
</html>