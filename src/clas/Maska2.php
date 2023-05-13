<?php
namespace src\clas;

/**
 * the binary representation of the subnet mask returns
 * двоичное представление маски подсети возвращает
 */

class Maska2
{
    public function maska2()
    {
        $maska='';
        $ii=$_SESSION['ipMask'];
        for ($i=1; $i<33; $i++) {
            if ($ii>0) $maska.='1'; else $maska.='0';
            if ($i==8 || $i==16 || $i==24) $maska.=' ';
            $ii--;
        }
        return $maska;
    }
}
