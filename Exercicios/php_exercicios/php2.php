<?php

//TRABALHANDO COM DATA E HORA


//para se obter a data atual é possivel trabalhar com a função date() especificando o formato que se quer... há´varios formatos
//Função SPLIT OBSOLETA USAR EXPLODE
//para separar com explode() é possivel criar uma lista do tamanho de palavras que vai receber e atribuir a função split.
//explode(string $delimiter, string $string_entrada [, int %limit]): array    se o limite for definido é dividido direitinho e o ultimo elemento contem o resto da string que sobrou

saudacao('12.30');

function saudacao ($hour){ //hour format = hh:mm

    $data_atual = date('d/m/Y');

    $full_hour = $hour;
    $hour_minute = explode ('.', $full_hour);
    
    if($hour_minute[0] <= 11){

        $str = 'Bom Dia';
        echo "João Pessoa, $data_atual. $str\n";
    }

    else if($hour_minute[0] >= 18){

        $str = 'Boa Noite';
        echo "João Pessoa, $data_atual. $str\n";
    }

    else{
        $str = 'Boa Tarde';
        echo "João Pessoa, $data_atual. $str\n";
    }


}

?>





