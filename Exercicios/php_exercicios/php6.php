<?php

passwordAleatory();


//33 ate 126 ascii letras e simbolos na talela
//criação de array é $variavel = array();
//Para adicionar é só $meuarray[] = $valor.   SEMPRE ADICIONA AO FINAL DO ARRAY ou ultima posição.

function passwordAleatory(){

    $my_password = array();

    for($i = 0; $i < 8; $i++){

        $alea = mt_rand(0, 100);
        //letra
        if($alea >= 50){
            $chr_atual = chr(mt_rand(33,126));
            $my_password[] = $chr_atual;
        }
        //numero
        else{

            $chr_atual = mt_rand(0,9);
            $my_password[] = $chr_atual;
        }

    }
  
    for($i = 0; $i < 8; $i++){

        echo $my_password[$i];
    }
}