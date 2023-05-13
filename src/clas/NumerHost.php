<?php
namespace src\clas;

class NumerHost
{
    static private $link = null;

    static public function createNumerHost()
    {
        if (is_null(self::$link)) self::$link = new NumerHost;
        return self::$link;
    }

    public function numerHost()
    {
            $power=32-$_SESSION['ipMask'];
            $power=pow(2, $power);
            $power-=2;
        return $power;
    }
}
