<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/form_add.css">
    <title>Adicionar usuario</title>
</head>
<body>
    <div class="cadastro">
        <h1>Adicionar usuario</h1>

        <form action="adicionar.php" method="post" enctype="multipart/form-data">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" required><br>

            <label for="foto_perfil">Foto de Perfil:</label>
            <input type="file" name="foto_perfil" accept="image/*"><br>

            <input type="submit" value="Cadastrar">
        </form>

        <a href="index.php">Voltar para a lista de usuarios</a>
    </div>
</body>
</html>