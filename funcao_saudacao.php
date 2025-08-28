<?php
//esta é uma função
//inicio da função saudação
 function saudacao($nome){
    return "Olá, $nome!";
 }
 //fim da função saudação
 echo saudacao("Bianca");
  //toda vez que der um echo saudação e colocar um parametro, nesse caso bianca, 
// ele vai retornar a função e vai falar o que tava no return, mas com o novo parametro
 ?>

 <?php
 function nomeDaFuncao($parametro1,$parametro2){
   $resultado = $parametro1 + $parametro2;
    return $resultado;
 }
 $soma = nomeDaFuncao(5,10);
 echo "O resultado é: " .$soma;
 ?>



