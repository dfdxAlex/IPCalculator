<?php
namespace src\clas;

/**
 * the class returns the IP address, creating it from session variables
 * класс возвращает IP адрес, создавая его из переменных сессий
 */

class Ip
{
    public function __construct($in)
    {
        $in->ip = $_SESSION['ip1'].'.'.
                  $_SESSION['ip2'].'.'.
                  $_SESSION['ip3'].'.'.
                  $_SESSION['ip4'];
    }
}
