<?php

$localhost = "localhost";
$user = "root";
$password = "";
$banco = "imobiliariadevs";

$conecta = mysqli_connect($localhost, $user, $password, $banco);

if (!$conecta) {
    die("Falha na conexão: " . mysqli_connect_error());
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = mysqli_real_escape_string($conecta, $_POST['email']);
    $password = mysqli_real_escape_string($conecta, $_POST['password']);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
    $resultado = mysqli_query($conecta, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        echo "Login bem-sucedido! Bem-vindo.";
        //aqui deve ser lincado a pag modificada com o botão cadastrar imovel. 
    } else {
        echo "Login ou senha inválidos.";
    }
}
?>
