<?php
    $conexao = mysqli_connect("localhost","root","","cadastro");

    if(!$conexao) {
        die("Erro ao conectar ao banco de dados:" . mysqli_connect_error());
    }
            
    $email = $_POST["email"];
    $senha = $_POST["senha"];
        
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        echo "Login bem-sucedido!";
    } else {
        echo "E-mail ou senha incorretos.";
    }

    $conexao->close();
?>