<html>
<body>
    
    <!--É preciso passar um script que é onde vai receber os dados do formulario-->
    <!--O metodo post, os dados vao ser recebidos no script dados.php de forma invisivel-->
    <!--É possivel tanto mostrar na mesma página php3.php ou em uma página difetente, dados.php, e isso deverá ser informado no action do formulário, onde será recebido os dados-->
    <form action= "php11.php" method="POST">
        <!--Coloquei o input do tipo number para que possa ser colocado apenas números inteiros.-->
        Insira uma Data: <input type="date" name="date"> <br>
        <input type="submit" name="Enviar">
    </form>
    <br><br><br><br>
</body>

</html>

<?php

if(isset($_POST['date']) && $_POST['date']!=''){

    $my_date = $_POST['date'];

    $year_month_day = explode('-', $my_date);


    function year_biss($year){

        $my_year = $year;

        if (($my_year%400) === 0){

            echo "O Ano é bissexto!";
        }

        else if ((($my_year % 4)===0) && (($my_year % 100) != 0)){

            echo "O ano é bissexto!";
        }

        else{

            echo "O ano NÃO é bissexto";
        }



    }

    year_biss($year_month_day[0]);



    
}