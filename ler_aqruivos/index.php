<?php
// funcão para ler texto
$testo = file_get_contents('tescto2.txt');
$testo= explode("\n", $testo);


echo count($testo);