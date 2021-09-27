<?php
session_start();
require ('cabeca.php');


?>
<a href="apagar2.php">Apagar Cookie </a>
<form action="pegar.php" method="post">
    <label> Qual nome ?</label>
    <input type="text" name="nome" ><br>

    <input type="submit" value="Salvar">
</form>
