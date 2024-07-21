<html>
  <head>
    <title>Exercício 1</title>
  </head>
  <body>
    <?php 
      echo "<p>Crie um script PHP que utilize um laço while para imprimir os números pares de 2 a 20. Cada número deve ser impresso em uma nova linha</p>"; 
      $valor = 2;
      echo "Números<br/>";
      while($valor <= 20) 
      {
        echo "$valor <br/>";
        $valor += 2; 
      }
    ?> 
  </body>
</html>