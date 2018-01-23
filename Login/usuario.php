<?php
 class Usuario {
     
  var $nome, $senha;

  function getNome() {
   return this->nome;
  }

  function Usuario($nome,$senha) {
   $this->nome  = $nome;
   //A senha será submetida a um hash, que é uma criptografia sem volta.
   $this->senha = md5($senha);
  }

  function autentica() {
   //Aqui estara o metodo de acesso ao banco.
   $nome  = $this->nome;
   $senha = $this->senha;
   $query = "SELECT nome, senha FROM usuarios WHERE nome='".$nome."' AND senha='".$senha."'";
   $resultados = mysql_query($query) or die(mysql_error());
   if (mysql_num_rows($resultados)>0) {
    $this->geraSessao($this);
    return true;
   }
   else{
    return false;
   }
  }

  function geraSessao($usuario) {
   session_start();
   $_SESSION['usuario'] = $usuario;
  }
 }
?>