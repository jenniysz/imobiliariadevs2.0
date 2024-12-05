<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bem-vindo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        div {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        a {
            display: block;
            margin: 10px 0;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div>
        <?php
        if (isset($_SESSION['username'])) {
            echo "<h2>Bem-vindo, " . $_SESSION['username'] . "!</h2>";
        } else {
            echo '
                <h2>Bem-vindo</h2>
                <a href="login.php">Login</a>
                <a href="registro.php">Registre-se</a>
            ';
        }
        ?>
    </div>
</body>
</html>
