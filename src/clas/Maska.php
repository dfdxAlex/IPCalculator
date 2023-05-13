<?php
namespace src\clas;

/**
 * the binary representation of the subnet mask returns
 * двоичное представление маски подсети возвращает
 */

class Maska
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

    // десятичное представление маски подсети
    // если функции дать IP адрес представленный строкой 
    // в двоичном виде, то она вернет строку IP в десятичном виде
    public function maska10($nomer2)
    {
        $maska='';
        $nomer=0;
        $nomer2=str_replace(' ','',$nomer2);
        for ($i=1; $i<33; $i++) {
            if (substr($nomer2,$i-1,1)=='1') {
                $nomer=$nomer+$this->bit($i);
            }
            if ($i==8) {
                $maska=$nomer;
                $nomer=0;
            }
            if ($i==16 || $i==24 || $i==32) {
                $maska.='.'.$nomer;
                $nomer=0;
            }
        }
        return $maska;
    }

    // функция возвращает вес бита
    function bit($nomer)
    {
        while($nomer>8) {
            $nomer=$nomer-8;
        }
         return match ($nomer) {
             8=>1,
             7=>2,
             6=>4,
             5=>8,
             4=>16,
             3=>32,
             2=>64,
             1=>128,
         };
    }
}
