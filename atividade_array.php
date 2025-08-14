<?php
    $frutas = ["Maça",
     "Banana", 
     "Laranja",
     "Pera",
     "Limão",
     "Morango",
    ];
    for($g=0; $g < count($frutas); $g++){
        //o g é a contagem do número de frutas
        //ele começa com 0 para começar a conta
        // o count é para o g contar dentro da variavel frutas
        // o g ++ é para repetir os números
        echo "Frutas: $frutas[$g]<br>";
    }
?>
