<?php
      
 include("usuario.php");
      
 $nome  = addslashes($_POST["nome"]);
 $senha = addslashes($_POST["senha"]);
      
 var usuario = new Usuario($nome,$senha);
      
 if (usuario->autentica()) 
 {
  header("location:principal.php");
 }
 else 
 {
  header("location:login.php");
 }
?>