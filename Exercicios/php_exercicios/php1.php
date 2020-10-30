<?php

//TRABALHANDO COM ESTRUTURA DE REPETIÇÃO FOR

//Exibir numeros pares de 200 a 300
$i=200;

//Estrutura de repetição definindo o contador i com $i;
//Imprimir no site é com echo.
for($i = 200; $i <=300; $i++){

    if(($i%2) === 0){

        echo $i;
        echo '<br>';
    }

}

?>