<?php
    if (isset($_POST['nome'])){
        $nome = $_POST['nome'];

    }

?>
<form action="" method="post">
    <labe>Nome</labe>
    <br>
    <input type="text" name="nome"><br>
    <input type="submit" value=Adicionar"">
</form>


<?php
echo $nome;
 ?>


<!--<table>-->
<!--    <tr>-->
<!--        <th>--><?php // foreach ($nome as $n){
//                echo $n;}   ?><!--</th>-->
<!--    </tr>-->
<!--</table>-->





