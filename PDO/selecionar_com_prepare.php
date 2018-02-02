<?php
  
   try()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=bancodedados","root","");
    }

    catch(PDOException $e)
    {
       // var_dump($e);
       // echo $e->getCode();
        echo $e->getMessage();
    }
    
    
    $buscar_usuario = $pdo->query("SELECT * FROM usuarios WHERE id = '1'");

    // Busca segura
    $id = $_GET['id'];

    $busca_segura   = $pdo->prepare("SELECT * FROM usuarios WHERE id = ? AND email = ?");

    $busca_segura1  = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id AND email = :email");
    $busca_segura1->bindValeu(":id",$id);
    $busca_segura1->bindValeu(":email","fabianomartins_scs@yahoo.com.br");
    $busca_segura1->execute();


    // Contagem de registros encontrados
    echo $buscar_segura1->rowCount();

?>