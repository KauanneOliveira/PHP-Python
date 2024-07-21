<html>
  <head>
    <title>Exercício 3</title>
  </head>
  <body>
    <?php 
    echo 'Crie um array associativo (conceito de chave-valor) em PHP contendo nomes de alunos como chaves e suas respectivas notas como valores. Em seguida, utilize um laço foreach para imprimir o nome do aluno e se ele está "Aprovado" ou "Reprovado" com base na nota (nota maior ou igual a 60 é aprovado)<br/><br/>'; 
    echo "Alunos e Situação:<br/><br/>";

    $alunos = array( "Lucia" => "90", "Estevo" => "40", "Roberto" => "10", "Julia" => "80");

    foreach($alunos as $nome => $nota) {
      if($nota >= 60) {
        echo "$nome - Aprovado<br/>";
      } else {
        echo "$nome - Reprovado<br/>";
      }
    }
    ?> 
  </body>
</html>