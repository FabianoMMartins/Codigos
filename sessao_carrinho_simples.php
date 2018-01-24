<?php
  //iniciar sempre a sessão
  session_start();
 
  if (empty($_SESSION['carrinho'])) {
    // se não houver um carrinho definido, criamos um para exemplo
      
    $_SESSION['carrinho'] = array( 'cliente' => 'Maria' ,
                                   'data' => '3/11/2009',
                                   'produtos' => array( 'Laranjas' => 0.50,
                                                        'Talho' => 4.35
                                                      )
                                 );
  }
 
  // Imprimir conteúdos do carrinho de compras
  // construir uma tabela para os dados
  echo "<table border="1"><tr>";
  echo "<th>Cliente</th><td>{$_SESSION['carrinho']['cliente']}</td>";
  echo "</tr><tr>";
  echo "<th>Data</th><td>{$_SESSION['carrinho']['data']}</td>";
  echo "</tr><tr>";
  echo "<th>Produtos</th><td><ul>";
 
  // percorrer todos os produtos
  $total = 0.0;
  foreach ($_SESSION['carrinho']['produtos'] as $p => $c) {
    echo "<li>$p - $c</li>";
    $total += $c;
  }
 
  echo "</ul></td></tr><tr>";
  echo "<th>Total</th><td>$total</td>/<tr></table>";
?>