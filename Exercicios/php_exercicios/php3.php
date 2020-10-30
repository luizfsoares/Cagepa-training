
<!--Forms-->
<!--TRABALHANDO COM OPERAÇÕES COM NUMEROS-->
<html>
<body>
    
    <!--É preciso passar um script que é onde vai receber os dados do formulario-->
    <!--O metodo post, os dados vao ser recebidos no script dados.php de forma invisivel-->
    <!--É possivel tanto mostrar na mesma página php3.php ou em uma página difetente, dados.php, e isso deverá ser informado no action do formulário, onde será recebido os dados-->
    <form action= "php3.php" method="POST">
        Numero 1: <input type="text" name="number1"> <br>
        Numero 2: <input type="text" name="number2"> <br>
        <input type="submit" name="Enviar">
    </form>
    <br><br><br><br>
</body>

</html>


<?php

//É preciso botar um if para chegar a existência do método e a checagem do valor
if(isset($_POST['number1']) && isset($_POST['number2']) && $_POST['number1']!='' && $_POST['number2'] !=''){
//Aqui deve ser usado a SUPER GLOBAL POST para poder recuperar os dados dos inputs
//passando como referência o nome que foi dado ao input do forulario

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    
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

    operacoes($number1, $number2);

}
?>
<!--
//Aqui deve ser usado a SUPER GLOBAL POST para poder recuperar os dados dos inputs
//passando como referência o nome que foi dado ao input do forulario

//E ainda poderá exibir sem problemas
//É possivel escrever um código HTML para fazer um formulário ou um input, bota.... antes do codigo PHP em si
//Usando a formatação de HTML como sempre
//Quando for começar a escrevr as funções em PHP para interagir com o formulario em HTML e CSS, é possível começar com  e assim muda o tipo de linguagem
// e escreve as funcoes

//Super Global GET e POST servem para coletar dados de formularios
//

-->