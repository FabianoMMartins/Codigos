<?php
    include 'conexao.php';

   //INSERIR
    $email = $_GET["email"];

    $busca  = $pdo->prepare("INSERT INTO usuarios(email)VALUES(:email)");
    $busca->bindValeu(":email",$email);
    $busca->execute();

    // Contagem de registros encontrados
    echo "Usuarios cadastrados.:".$busca->rowCount();
?>