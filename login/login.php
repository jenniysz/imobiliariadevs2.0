<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
        .login-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        .login-container h2 {
            margin-bottom: 20px;
            color: #333333;
            font-size: 24px;
            text-align: center;
        }
        .login-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333333;
        }
        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
        }
        .login-container button:hover {
            background-color: #0056b3;
        }
        .login-container a {
            display: block;
            margin-top: 10px;
            text-align: center;
            color: #007bff;
            text-decoration: none;
        }
        .login-container a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Entrar</button>
            <a href="registro.php">Não tem uma conta? Cadastre-se aqui</a>
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

            $email = $_POST['email'];
            $senha = $_POST['password'];

            $sql = "SELECT nome FROM usuarios WHERE email='$email' AND senha='$senha'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $nome = $row['nome'];
                header("Location: ../index.php?nome=" . urlencode($nome));
                exit();
            } else {
                echo "<p>Email ou senha inválidos!</p>";
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>
