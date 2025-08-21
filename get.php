<?php

//get recebe a variavel por URL
 $valor1 = $_GET['valor1'];
 $valor2 = $_GET['valor2'];
 $sinal = $_GET['sinal'];

 $resultado = $valor1.$sinal.$valor2;
 echo $resultado;
 //o sinal de + tem o papel de preencher espaços na URl, para
 //testarmos teremos que colocar em hexadecilam: sinal =%2B
 if($sinal == "*"){
    echo "<br> .$valor1*$valor2";
 }
 if($sinal == "-"){
    echo "<br> .$valor1-$valor2";
 }
 if($sinal == "+"){
    echo "<br> .$valor1+$valor2";
 }
 if($sinal == "/"){
    echo "<br> .$valor1/$valor2";
 }
 

//teste
//meu_site.com.br/get.php?valor1=15&valor2=33&sinal=*

