<!--Forms-->
<!--TRABALHANDO COM STRINGS-->
<html>
<body>
    
    <!--É preciso passar um script que é onde vai receber os dados do formulario-->
    <!--O metodo post, os dados vao ser recebidos no script dados.php de forma invisivel-->
    <!--É possivel tanto mostrar na mesma página php3.php ou em uma página difetente, dados.php, e isso deverá ser informado no action do formulário, onde será recebido os dados-->
    <form action= "php4.php" method="POST">
        Texto: <br>
        <textarea type="text"name="my_text" cols="30" rows="3"></textarea> <br><br>
        <input type="submit" name="Enviar">
    </form>
    <br><br><br><br>
</body>

</html>


<?php

//strlen() mostra o tamanho de uma string
//strrev() mostra a string de trás para frente
//ucfrist mostra a string com a primeira letra maiuscula. Se ja tiver, mantem, se não tiver bota maiusculo

if(isset($_POST['my_text']) && $_POST['my_text'] != ''){

    $my_text = $_POST['my_text'];

    function operacoesString($my_text){

        echo "Texto digitado: $my_text <br><br>";
        echo "O tamanho do texto é: ".strlen($my_text);
        echo "<br>O texto reverso é: ". strrev($my_text);
        echo "<br>Primeira maiuscula: ". ucfirst($my_text);

    }

    operacoesString($my_text);


    
}