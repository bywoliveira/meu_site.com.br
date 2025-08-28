<?php
$num=$_POST['num'];
function parOuImpar($num) {
    if ($num %2 == 0) {
      return " O número $num é par";
    } else {
        return " O número $num é Ímpar";
    }
}
echo parOuImpar ($num);
?>