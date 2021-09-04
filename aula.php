<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $aluno = "Davi";
    $nota1= 5;
    $nota2=8;
    $nota3=7;
    $nota4=5;
    $media=($nota1+$nota2+$nota3+$nota4)/4;
    echo"Nome: $aluno <br/> media: $media";
    if($media<=5){
        echo" A nota do Aluno(a): $aluno foi: $media Reprovado!!";
    }else{
        echo" Aluno(a):$aluno obteve media $media foi aprovado";

    }
    
    
    
    ?>
</body>
</html>