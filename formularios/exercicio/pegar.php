<a href="index.php">volta</a>
<?php
if (isset($_COOKIE['aviso'])){

}

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);


if ($nome){

    echo "$nome "."<hr>";

}else{
    $_COOKIE['aviso'] = "nome nao achado";
    header("Location: index.php");
    exit();
}
?>




