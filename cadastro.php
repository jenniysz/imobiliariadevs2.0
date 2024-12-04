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
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <label for="cellphone">Telefone - Formato (XX) XXXXX-XXXX :</label>
            <input type="tel" id="cellphone" name="cellphone">

            <label for="address">Endereço:</label>
            <textarea id="address" name="address" rows="3"></textarea>

            <button type="submit">Cadastrar</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Conexão com o banco de dados
            $localhost = "localhost";
            $user = "root";
            $passwordDB = "";
            $database = "imobiliariadevs";

            $conecta = mysqli_connect($localhost, $user, $passwordDB, $database);

            // Verifica se a conexão foi bem-sucedida
            if (!$conecta) {
                die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
            }

            $name = mysqli_real_escape_string($conecta, $_POST['name']);
            $email = mysqli_real_escape_string($conecta, $_POST['email']);
            // Aqui removemos a criptografia e armazenamos a senha diretamente
            $password = mysqli_real_escape_string($conecta, $_POST['password']);
            $cellphone = mysqli_real_escape_string($conecta, $_POST['cellphone']);
            $address = mysqli_real_escape_string($conecta, $_POST['address']);

            $checkEmailQuery = "SELECT email FROM usuarios WHERE email = '$email'";
            $emailResult = mysqli_query($conecta, $checkEmailQuery);

            if (mysqli_num_rows($emailResult) > 0) {
                echo "<h3 style='color: red;'>Este e-mail já está cadastrado. Tente outro.</h3>";
            } else {
                // Insere os dados no banco
                $sql = "INSERT INTO usuarios (name, email, password, cellphone, address) 
                        VALUES ('$name', '$email', '$password', '$cellphone', '$address')";

                if (mysqli_query($conecta, $sql)) {
                    echo "<h3 style='color: green;'>Usuário cadastrado com sucesso!</h3>";
                } else {
                    echo "<h3 style='color: red;'>Erro ao cadastrar usuário: " . mysqli_error($conecta) . "</h3>";
                }
            }

            // Fecha a conexão
            mysqli_close($conecta);
        }
        ?>
    </div>
</body>
</html>
