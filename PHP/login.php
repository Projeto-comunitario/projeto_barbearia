<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(empty($nome)) || (empty($senha)){
        echo "Preencha todos os campos";
    }else {
        echo "Você conseguiu";
    }

?>