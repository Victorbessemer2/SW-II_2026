<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ano_atual = date('Y');
        
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $nome = htmlspecialchars($_POST['nome']);
        $idade_ano = $ano_atual - $idade;

        if ($idade >= 18) {
           echo "<p style = color:red> Você é maior de idade</p>";
        }else {
            echo "<p style = color:green> Você é menor de idade </p>";
        }

        



    ?>

    <p>O nome é: <?php echo $nome; ?> </p>
    <p>o email é: <?php echo $email; ?> </p>
    <p>A idade é: <?php echo $idade; ?> </p>

    <p>Você nasceu no ano: <?php echo $idade_ano; ?> </p>


</body>
</html>