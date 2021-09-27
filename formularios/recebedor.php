<?php
// melho forma
$nome = filter_input(INPUT_POST,'nome');
$idade = filter_input(INPUT_POST,'idade');

if ($nome){
    echo "Nome: ".$nome."<hr>";
    echo "IDade: ".$idade;
}else{
//    echo "Nao enviou".$nome;
    header("Location: index.php");
    exit();
}

//if (isset($_POST['nome'])){
//    $nome = $_POST['nome'];
//    $idade = $_POST['idade'];
//    echo "meu nome e $nome e minha idade e $idade";
//}