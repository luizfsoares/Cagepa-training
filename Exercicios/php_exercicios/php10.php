<html>
<body>
    
    <!--É preciso passar um script que é onde vai receber os dados do formulario-->
    <!--O metodo post, os dados vao ser recebidos no script dados.php de forma invisivel-->
    <!--É possivel tanto mostrar na mesma página php3.php ou em uma página difetente, dados.php, e isso deverá ser informado no action do formulário, onde será recebido os dados-->
    <form action= "php10.php" method="POST">
        Digite 10 números separados por vírgula: <br><br>
        <textarea type="text"name="numbers" cols="30" rows="3"></textarea> <br><br>
        <input type="submit" name="Enviar">
    </form>
    <br><br><br><br>
</body>

</html>


<?php

if(isset($_POST['numbers']) && $_POST['numbers']!=''){

    //Separação do texto unico em um array, com a vírgula como ponto de corte.
    $numbers = explode(',', $_POST['numbers'], 10);


    //Com as funções min() e max() é possivel checar o valor minimo e maximod e um array ou um conjunto de valores passados como parametro para as funcoes.
    echo "<br>Valor Mínimo: ". min($numbers);
    echo "<br>Valor Máximo: ". max($numbers);
}