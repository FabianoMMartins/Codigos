<?php
//VERIFICA SE A OPÇÃO SAIR DO SISTEMA FOI ESCOLHIDA
if($_GET["acao"] == ‘destruir’)
{
 //DESTRÓI O COOKIE
 if(setcookie("imasters_login"))
  Header("Location:cookie.php");
 else echo "Aconteceu algum erro.";
}//FECHA IF($GET)



//VERIFICA SE EXISTE O COOKIE
if($_COOKIE["imasters_login"])
{
 $nome = $_COOKIE["imasters_login"];
 echo "Olá, <b>$nome</b>. Seja Bem vindo ao nosso Web Site.";

 //LINK PARA DESTRUIR O COOKIE
 echo "<br><br><a href=’$PHP_SELF?acao=destruir’>Sair do Sistema(destruir o cookie)</a>";
}//FECHA IF



//SE NÃO TIVER COOKIE, REDIRECIONA PARA A TELA DE LOGIN
else {
 Header("Location:cookie.php");
}//FECHA ELSE
?> 