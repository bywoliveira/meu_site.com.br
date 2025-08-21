<?php
$pessoa=["nome" => "Joaõ", "idade" => 30];
echo $pessoa["nome"];
?>
<p> Olá aqui é um HTML:</p>
<?php
 $aluno=["nome" => "Francisco", "idade" => 16, "nota"=> 9];
 echo "O aluno " . $aluno["nome"] . " está com " . $aluno["idade"] . " anos ". " e está com nota ". $aluno["nota"] . ".<br>";
 $ano_atual= date('Y'); 
 //a função $ano_atual= date('y') define a data corretemaente para o sistema sempre ficar atualizado
$ano= $ano_atual- $aluno["idade"];
echo "Você nasceu no ano de " .$ano. ".<br>";
echo "hoje é " .date("d-m-y") . "<br>";
echo "hoje, no dia  " .date("d")." é dia do engenheiro. <br>";
echo "Agora são exatamente " .date("H:i:s");

?>