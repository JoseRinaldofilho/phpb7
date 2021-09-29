<?php
class Basico1{
    public function somar($x , $y)    {
        return $x + $y;
    }
   
}
    
// classe 2

class Basico2{
    public function somar($x, $y)
    {
        $reseltado = $x;
        for ($i=1; $i<$y; $i++){
            $reseltado++;
        }
        return $reseltado;
    }
 
}
class  Matematica{
    private $pegar;

    public function __construct($b)
    {
        $this->pegar = $b;
        
        // buscou da classe Basico estanciou
       // $this->pegar = new Basico2();
    }

    public function somar($x , $y)
    {
        //chamar a classe basico para fazer isso
        return $this->pegar->somar($x,$y);
    }
    

   


}
//$basico = new Basico1();
$obj = new Matematica(new Basico1());
echo $obj->somar(10,15);

class DataBase{
    private $motor;

    /**
     * DataBase constructor.
     * @param $motor
     */
    public function __construct(DatabaseInterface $motor)
    {
        $this->motor = $motor;
    }

    public function listarDados(){
        return $this->motor->listar();
    }


}
abstract class MysqlMotor implements DateTimeInterface {
    public function listar(){

    }

}
























