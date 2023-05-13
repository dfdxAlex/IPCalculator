<?php
namespace src\clas;

/**
 * class converts decimal to binary (1 byte)
 * $positions=8 defines how many characters should be
 * in the output number, the missing ones will be filled with zeros
 *
 * класс преобразует десятичного числа в двоичное (1 байт)
 * $positions=8 определяет сколько знаков должно быть 
 * в выходном числе, недостающие заполнятся нулями
 */

class Nomer10to2
{
    public function nomer10to2($nomer, $positions=8)
    {
        $job=true;
        $nomerJob=$nomer;
        $rez='';

        // преобразовываем из десятичного в двоичный делением на 2
        while($job) {
            $rez.=$nomerJob % 2;
            $nomerJob=intdiv($nomerJob,2);
            if ($nomerJob<2) {
                $rez.=$nomerJob;
                $job=false;
            } 
        }
        // зеркально разворачиваем строку
        $rez=strrev($rez);
        // заполняем нулями недостающие позиции
        while(strlen($rez)<$positions) {
            $rez='0'.$rez;
        }
        return $rez;
    }
}
