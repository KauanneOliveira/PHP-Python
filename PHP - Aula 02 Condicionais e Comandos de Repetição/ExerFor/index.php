<html>
  <head>
    <title>Exercício 4</title>
  </head>
  <body>
    <?php 
    echo 'Crie um script PHP que utilize um laço for para calcular a soma dos números de 1 a 10. Imprima o resultado da soma.<br/><br/>'; 
    echo 'Resultado: ';

    $soma = 0;
    
    for( $num = 1; $num <=10; $num++ ) {
      $soma += $num;
      //echo "$soma<br/>"; - imprime todos os resultados
    }

    echo "$soma<br/>";
    ?> 
  </body>
</html>