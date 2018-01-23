<?php
      
 include("usuario.php");
      
 $nome = $_POST["nome"];
 $senha = $_POST["senha"];
      
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