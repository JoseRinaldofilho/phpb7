<?php
setcookie('nome','',time() - 3600); // um minutos no passado

header("Location: index.php");
exit();
