<?php

$testo = "jose filho";

file_put_contents('nome.txt', $testo);

// adicionar conteudo
$testo = "\nJose Rinaldo";
file_put_contents('nome.txt',$testo);