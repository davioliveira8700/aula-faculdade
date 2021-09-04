<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe Informaçoes</title>
</head>
<body>
    <?php 
    extract ($_POST);
    echo ("Nome: $fnome<br/> Endereco: $frua <br/> Senha: $fsenha");
     ?>
</body>
</html>