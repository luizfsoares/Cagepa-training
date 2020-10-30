<html>
<body>
    
    <!--É preciso passar um script que é onde vai receber os dados do formulario-->
    <!--O metodo post, os dados vao ser recebidos no script dados.php de forma invisivel-->
    <!--É possivel tanto mostrar na mesma página php3.php ou em uma página difetente, dados.php, e isso deverá ser informado no action do formulário, onde será recebido os dados-->
    <form action= "php7.php" method="POST">
        Digite um Estado do Brasil: <br>
        <textarea type="text"name="my_text" cols="30" rows="2"></textarea> <br><br>
        <input type="submit" name="Enviar">
    </form>
    <br><br><br><br>
</body>

</html>


<?php

if(isset($_POST['my_text']) && $_POST['my_text'] != ''){

    $estado = ucwords($_POST['my_text']); // aplicando a função de ucwords para que independente da forma que seja escrita, mas primeiras letras sejam sempre maiúsculas
                                          // como uma forma de generalização.

    function capitalBrasil($estado){

        switch($estado){

            case 'Acre':
                echo "A capital é Rio Branco";
                break;

            case 'Alagoas':
                echo "A capital é Maceió";
                break;

            case 'Amapá':
                echo "A capital é Mamapá";
                break;

            case 'Amazonas':
                echo "A capital é Manaus";
                break;
            
            case 'Bahia':
                echo "A capital é Salvador";
                break;
            case 'Ceará':
                echo "A capital é Fortaleza";
                break;

            case 'Distrito Federal':
                echo "A capital é Brasília";
                break;

            case 'Espírito Santo':
                echo "A capital é Vitória";
                break;

            case 'Goiás':
                echo "A capital é Goiânia";
                break;

            case 'Maranhão':
                echo "A capital é São Luís";
                break;

            case 'Mato Grosso':
                echo "A capital é Cuiabá";
                break;

            case 'Mato Grosso Do Sul':
                echo "A capital é Campo Grande";
                break;

            case 'Minas Gerais':
                echo "A capital é Belo Horizonte";
                break;

            case 'Pará':
                echo "A capital é Belém";
                break;

            case 'Paraíba':
                echo "A capital é João Pessoa";
                break;

            case 'Paraná':
                echo "A capital é Curitiba";
                break;

            case 'Pernambuco':
                echo "A capital é Recife";
                break;

            case 'Piauí':
                echo "A capital é Teresina";
                break;

            case 'Rio De Janeiro':
                echo "A capital é Rio de Janeiro";
                break;

            case 'Rio Grande Do Norte':
                echo "A capital é Natal";
                break;

            case 'Rio Grande Do Sul':
                echo "A capital é Porto Alegre";
                break;

            case 'Rondônia':
                echo "A capital é Porto Velho";
                break;

            case 'Roraima':
                echo "A capital é Boa Vista";
                break;

            case 'Santa Catarina':
                echo "A capital é Florianópolis";
                break;

            case 'São Paulo':
                echo "A capital é São Paulo";
                break;

            case 'Sergipe':
                echo "A capital é Aracajú";
                break;

            case 'Tocatins':
                echo "A capital é Palmas";
                break;

        }

    }

    capitalBrasil($estado);
}