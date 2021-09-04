<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculo</title>
</head>
<body>
<?php 
    extract ($_POST);
    $soma= $valorum + $valordois;
    if($soma == 0){
        echo "DIGITE UM VALOR VALIDO";
            }else{
    echo (" Resultado da soma: de $valorum com $valordois : $soma ");
        }
     ?>
</body>
</html>