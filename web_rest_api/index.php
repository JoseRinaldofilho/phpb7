<form action="" method="post">
    <input type="text" name="adress">
    <input type="submit" value="Enviar" name="acao">

</form>

<?php
if (isset($_POST['acao'])){
    $url = urldecode($_POST['adress']);
    $api = file_get_contents("http://maps.google.com/maps/api/geocode/json?address='.$url.'sensor=false");
    echo "<pre>";
    var_dump($api);
}
