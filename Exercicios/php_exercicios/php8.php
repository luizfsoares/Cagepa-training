<!--Forms-->
<!--TRABALHANDO COM STRINGS-->
<html>
<body>
    
    <!--É preciso passar um script que é onde vai receber os dados do formulario-->
    <!--O metodo post, os dados vao ser recebidos no script dados.php de forma invisivel-->
    <!--É possivel tanto mostrar na mesma página php3.php ou em uma página difetente, dados.php, e isso deverá ser informado no action do formulário, onde será recebido os dados-->
    <form action= "php8.php" method="POST">
        Texto: <br>
        <textarea type="text"name="my_text" cols="30" rows="3"></textarea> <br><br>
        <input type="submit" name="Enviar">
    </form>
    <br><br><br><br>
</body>

</html>


<?php

if(isset($_POST['my_text']) && $_POST['my_text'] != ''){

    $my_text = $_POST['my_text'];
    $number_words = explode(" ", $my_text);
    
    $count=0;

    //iterando sobre o texto verificando a existencia da posição após o split()/explode()
    for($i = 0; $i < strlen($my_text); $i++){

        if(isset($number_words[$i])){
            $count++;
        }
    }


    echo "Quantidade de caracteres: ". strlen($my_text);
    echo "<br>Texto com todas as iniciais maiúsculas: ". ucwords($my_text);
    echo "<br>Quantidade de palavras: ". $count;
    echo "<br>Ordem Alfabética: ";
    sort($number_words, SORT_FLAG_CASE); //Faz a ordenação e aplica no proprio array. COmo o retorno é um booleano de sucesso ou falha, então não precisa atribuir a outra variavel.
    //Sort flag case ordena sem considerar letras maiusculas e minusculas
    for($i = 0; $i < $count; $i++){
        echo $number_words[$i];
        echo " ";
    };
    echo "<br>Palavras em ordem aleatória: ";
    shuffle($number_words);
    for($i = 0; $i < $count; $i++){
        echo $number_words[$i];
        echo " ";
    };

}