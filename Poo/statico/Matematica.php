<?php
// static
class  Matematica{

    public static function somar($x,$y)    {
            return $x+$y;
        }

    public static function nome()
    {
        echo "JOSe";
    }
}

echo Matematica::somar(15,20);
echo Matematica::nome();