<?php
     // Criando Cookies
     setcookie('FORD_TAURUS', 'FORD TAURUS 97', time()+172800);

     // Acessando Cookies
     echo $_COOKIE['FORD_TAURUS']; //Resultado: Criando e acessando Cookies


    if(isset ($_COOKIE['FORD_TAURUS']))
    {
        header("Location:taurus97.php");
    }
?>


<?php

     // CRIANDO COOKIE
    $carro = "Volks";
    $marca = "Fusca";
    $tempo = time() + 3600;

    setcookie($carro,$marca,$tempo);

    // LER COOKIE
    $ler = $_COOKIE['Volks'];

    echo $ler;

?>