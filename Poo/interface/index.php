<?php
// interface nao estaciar
include ('Interfacees.php');
// para usar a interface usa impletemte
class Teste implements Interfacees {
    public function printNaTela()
    {
        // TODO: Implement printNaTela($par) method.
        echo "oa";
    }

}
$teste = new Teste();

$teste->printNaTela();