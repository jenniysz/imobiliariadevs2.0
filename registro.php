<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .register-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        .register-container h2 {
            margin-bottom: 20px;
            color: #333333;
            font-size: 24px;
            text-align: center;
        }
        .register-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333333;
        }
        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"],
        .register-container input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .register-container button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }
        .register-container button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Cadastro</h2>
        <form action="registro.php" method="POST">
            <label for="name">Nome:(Apenas o primeiro)</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <label for="phone">Telefone:</label>
            <input type="tel" id="phone" name="phone" required>
            <label for="address">Endereço:</label>
            <input type="text" id="address" name="address" required>
            <button type="submit">Cadastrar</button>
                       <a href="login.php">Voltar para login</a>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "usuariopadrao";
        $password = "";
        $dbname = "registro";
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Conexão falhou: " . $conn->connect_error);
            }

            $nome = $_POST['name'];
            $email = $_POST['email'];
            $senha = $_POST['password'];
            $telefone = $_POST['phone'];
            $endereco = $_POST['address'];

            $sql = "INSERT INTO usuarios (nome, email, senha, telefone, endereco)
            VALUES ('$nome', '$email', '$senha', '$telefone', '$endereco')";

            if ($conn->query($sql) === TRUE) {
                $_SESSION['username'] = $nome;
                header("Location: login.php");
                exit();
            } else {
                echo "<p>Erro: " . $sql . "<br>" . $conn->error . "</p>";
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>
