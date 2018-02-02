<?php
    #CONEXAO
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
  
?>