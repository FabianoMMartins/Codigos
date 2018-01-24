<?php

//VERIFICA SE EXISTE O COOKIE CRIADO NO USUÁRIO

if($_COOKIE["imasters_login"])
{
 //SE O COOKIE EXISTIR, REDIRECIONO PARA A PÁGINA LOGADO.PHP

 Header("Location:logado.php");
}//FECHA IF ($_COOKIE)


//VERIFICA SE O FORMULÁRIO FOI ENVIADO (btnOK)
if($_POST["btnOK"]) {
 //PEGA AS VARIÁVIES DO FORMULÁRIO
    
 $post_nome = $_POST["txt_nome"];
 $post_senha = $_POST["txt_senha"];
    

 //VERIFICA SE A OPÇÃO SALVAR COOKIE ESTÁ SETADA
 if($_POST["txt_salvar"])
{
  //CRIA O COOKIE COM DURAÇÃO DE 1 HORA
  setcookie("imasters_login", $post_nome, time()+3600);
     
  //REDIRECIONA PARA A PÁGINA DE LOGADO
  header("Location:logado.php");
 }//FECHA IF(txt_salvar)

    
 else {
  echo "Você não salvou o COOKIE, portanto vc não tem acesso ao nosso Site.";
 }//FECHA ELSE
}//FECHA IF (btnOK)


//SENÃO, EXIBE O FORMULÁRIO PARA ELE SE LOGAR NO WEB SITE
else {?>
 <h2>Coluna iMasters PHP nº67: $_COOKIES</h2>
 <form name=’frm_cookie’ method=’post’>
  <table border=’0′ cellpading=’0′ cellspacing=’0′ width=’50%’>
  <tr>
   <td width=’10%’ height=’25’>Login:&nbsp;</td>
   <td width=’40%’ height=’25’><input type=’text’ name=’txt_nome’ size=’8′></td>
  </tr>
  <tr>
   <td width=’10%’ height=’25’>Senha:&nbsp;</td>
   <td width=’40%’ height=’25’><input type=’password’ name=’txt_senha’ size=’5′></td>
  </tr>
  <tr>
   <td width=’50%’ height=’25’ colspan=’2′>
   <input type=’checkbox’ name=’txt_salvar’ value=’1′ checked>Salvar (criar cookie)</td>
  </tr>
  <tr>
   <td width=’50%’ height=’25’ colspan=’2′>
   <input type=’submit’ name=’btn_logar’ value=’Logar’>
   <input type=’hidden’ name=’btnOK’ value=’1′></td>
  </tr>
  </table>
</form>
<? } //FECHA
else
?> 