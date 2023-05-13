<?php
namespace src\clas;

/**
 * the function converts the decimal form of the IP address or mask to binary.
 * input parameter of type 111.111.111.111
 * функция переводит десятичный вид IP адреса или маски в двоичный.
 * входной параметр типа 111.111.111.111
 */

class Ip10To2
{
    public function ip10To2($nomer2) {
        $nomer10to2 = new Nomer10to2;
        $masIp=preg_split ('/\./',$nomer2);
        $rez=$nomer10to2->nomer10to2((int)$masIp[0]).
             $nomer10to2->nomer10to2((int)$masIp[1]).
             $nomer10to2->nomer10to2((int)$masIp[2]).
             $nomer10to2->nomer10to2((int)$masIp[3]);
        return $rez;
    }
}
