<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios</title>
</head>
<body>

<?php
    if (isset($_POST['nome'])) {
        foreach ($_POST['nome'] as $value){
            echo "<tr><td>.$value.</td></tr>";
        }
//        $nome = $_POST['nome'];
//        $email = $_POST['email'];
//        echo "meu nome e $nome e meu email e $email";
    }
?>
<form action="" method="post">
    <input type="text" name="nome[]" id=""><br>
    <input type="text" name="email" id=""><br><br>

    <input type="submit" value="Enviar">
</form>

</body>
</html>


