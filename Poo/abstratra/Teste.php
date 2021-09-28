<?php

// so serve para ser herdada(pai)
abstract class Teste{

    public function fun1()    {
        echo "Fun1";
    }
    // FUNCAO ABISTRATRA PRECIA SER RECRIANDA NA PRINCIPAL
    abstract public function fun2();

}
class Principal extends Teste{
    public function fun2()
    {
        echo "Fun2 <hr>";
        
    }

}
$n1 = new Principal();
$n1->fun2();
$n1->fun1();