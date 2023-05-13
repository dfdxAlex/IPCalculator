<?php
namespace src\clas;

/**
 * class returns the number of hosts in the network, subtracting the number of bits from 32,
 * dedicated to the network address
 * session variable is used as an input parameter
 * $_SESSION['ipMask']
 * класс возвращает число хостов в сети, отнимая от 32-х число битов, 
 * выделенных под адрес сети
 * в качестве входного параметра используется переменная сессии 
 * $_SESSION['ipMask']
 */

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
