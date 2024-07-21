<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      $v1 = 10;
      $v2 = 9;
      $v3 = 8;
      echo "A média é: " . ($v1 + $v2 + $v3) / 3;
      echo "</br>";
    
      echo "O número é: " . ($v1 % 2 == 0 ? "par" : "impar");
      echo "</br>";
    
      if($v1 == 100){
        echo "O número é igual a 100";
      } else if($v1 > 100){
        echo "O número é maior que 100";
      } else {
        echo "O número é menor que 100";
      }
      echo "</br>";
    
      var_dump($v1, $v2, $v3);
      ?>
</html>