<!--Forms-->
<!--TRABALHANDO COM NUMEROS ALEATORIOS-->


<html>
<body>
    
    <!--É preciso passar um script que é onde vai receber os dados do formulario-->
    <!--O metodo post, os dados vao ser recebidos no script dados.php de forma invisivel-->
    <!--É possivel tanto mostrar na mesma página php5.php ou em uma página difetente, dados.php, e isso deverá ser informado no action do formulário, onde será recebido os dados-->
    <form action= "php5.php" method="POST">
        Numero 1: <input type="text" name="number1"> <br>
        Numero 2: <input type="text" name="number2"> <br>
        <input type="submit" name="Enviar">
    </form>
    <br><br><br><br>
</body>

</html>



<?php

//A função mt_rand gera um numero aleatorio entre o min e o max estabelecidos
//Ao integrar a uma estrutura de repetição é possivel gerar varios aleatorios.

if(isset($_POST['number1']) && isset($_POST['number2']) && $_POST['number1']!='' && $_POST['number2'] !=''){

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    function randomNumber($number1, $number2){

        for ($i = 0; $i < 20; $i++){

            echo "<br>Aleatório ".($i + 1). "= ". mt_rand($number1, $number2);
        
        }
    }

    randomNumber($number1, $number2);



}