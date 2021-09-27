<?php
session_start();

// melho forma
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);//  validaõa email
$idade = filter_input(INPUT_POST,'idade', FILTER_VALIDATE_INT);



if ($nome && $idade && $email){
    // setar um coker tem que ser antes de exeibir qualquer coisa na tela
    $expiracao = time() + (86400 * 30); // um dia esse cokker
    ///      nomeCoker var  e quando ele espira
    setcookie('nome',$nome, $expiracao);

    echo "Nome: ".$nome."<hr>";
    echo "Email: ".$email."<hr>";
    echo "Idade: ".$idade;
}else{
//    echo "Nao enviou".$nome;
    //de der errado
    $_SESSION['aviso']="<h1 style='color: red'>Preencha os campos corretamnete  </h1>";
    header("Location: index.php");
    exit();
}

//if (isset($_POST['nome'])){
//    $nome = $_POST['nome'];
//    $idade = $_POST['idade'];
//    echo "meu nome e $nome e minha idade e $idade";
//}