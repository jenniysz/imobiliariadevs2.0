<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário - Imóveis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-container input,
        .form-container textarea,
        .form-container button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-container button {
            background-color: #5cb85c;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border: none;
        }
        .form-container button:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Cadastro de Usuário</h2>
        <form action="" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone">

            <label for="endereco">Endereço:</label>
            <textarea id="endereco" name="endereco" rows="3"></textarea>

            <button type="submit">Cadastrar</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);
            $senha = htmlspecialchars($_POST['senha']);
            $telefone = htmlspecialchars($_POST['telefone']);
            $endereco = htmlspecialchars($_POST['endereco']);

            echo "<h3>Usuário cadastrado com sucesso!</h3>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>E-mail:</strong> $email</p>";
            echo "<p><strong>Telefone:</strong> $telefone</p>";
            echo "<p><strong>Endereço:</strong> $endereco</p>";
        }
        ?>
    </div>
</body>
</html>
