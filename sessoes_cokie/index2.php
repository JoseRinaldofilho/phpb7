<?php
session_start();

//destruir um session
unset($_SESSION['nome']);
//}if (isset($_SESSION['nome'])) {
//    echo $_SESSION['nome'];
//    $_SESSION = '';
//    exit();
//}
?>