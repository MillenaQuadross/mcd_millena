<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario cadastrar</title>
</head>
<body>
    <h1>Formulario cadastrar</h1>
    <p>Insira os dados requisitados:
        <form action="inserir.php" method="post">
        
        <label for="nome">Nome </label>
        <input type="text" name="nome" id="nome" placeholder="Nome do produto"required><br><br>

        <label for="quantidade">Quantidade</label>
        <input type="number" name="quantidade" id="email" placeholder="quantidade a ser adicionada ao estoque"required><br><br>

        <label for= "preco">preço de custo</label>
        <input type="number" name= "custo" id= "venda" placeholder="preço que custa cada unidade"required><br><br>

        <label for= "preco">preco de venda</label>
        <input type= "number" name="venda" placeholder= "preco em que cada unidade vai ser vendida" required><br><br>

        <input type= "submit" value="enviar">
        </form>
    </p>
</body>
</html>