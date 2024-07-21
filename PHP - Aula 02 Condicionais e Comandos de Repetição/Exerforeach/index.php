<html>
  <head>
    <title>Exercício 2</title>
  </head>
  <body>
    <?php 
    echo 'Crie um script PHP que utilize um laço foreach para iterar sobre um array de nomes de frutas (por exemplo, "Maçã", "Banana", "Laranja"). Imprima cada nome de fruta em uma nova linha.<br/><br/>'; 
    echo 'Frutas: <br/><br/>';
    $frutas = array( "Abacaxi", "Pera", "Banana", "Morango");
    foreach($frutas as $fruta){
      echo "$fruta <br/>";
    }
    ?> 
  </body>
</html>