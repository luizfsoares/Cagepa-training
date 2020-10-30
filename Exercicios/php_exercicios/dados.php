<?php

//Aqui deve ser usado a SUPER GLOBAL POST para poder recuperar os dados dos inputs
//passando como referência o nome que foi dado ao input do forulario

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];

operacoes($number1, $number2);

//E ainda poderá exibir sem problemas

function operacoes($number1, $number2){

    $add = number_format($number1 + $number2, 2, ',', '.');
    $sub = number_format($number1 - $number2, 2, ',', '.');
    $mult = number_format($number1 * $number2, 2, ',', '.');
    $div = number_format($number1 / $number2, 2, ',', '.');
    $rest_div = number_format($number1 % $number2, 2, ',', '.');
    $avg = number_format(($number1 + $number2)/2, 2, ',', '.');

    echo "Soma: $add.<br>";
    echo "Subtração: $sub.<br>";
    echo "Multiplicação: $mult.<br>";
    echo "Divisão: $div.<br>";
    echo "Resto da Divisão: $rest_div. <br>";
    echo "Média: $avg<br>.";
}

?>



$number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    function randomNumber($number1, $number2){

        for ($i = 0; $i < 20; $i++){

            echo "Aleatório ".$i. "= ". mt_rand($number1, $number2);
            <br>
        }

    }

    randomNumber($number1, $number2);
