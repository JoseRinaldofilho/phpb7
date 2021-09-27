<?php
require ('header.php');
?>

<form action="recebedor.php" method="post">
    <label >
        Nome:
        <br>
        <input type="text" name="nome">
    </label><br>
    <label >
        Idade:
        <br>
        <input type="text" name="idade">
    </label>
    <br>
    <input type="submit" value="Enviar">
</form>
