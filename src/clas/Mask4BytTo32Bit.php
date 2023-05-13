<?php
namespace src\clas;

/**
 * the function refines the contents of the $_SESSION['ipMask'] variable
 * which at one time contains a mask in the form of a single number,
 * number of bits
 * if the value of the variable is zero and all calculations are bound
 * to it, then convert the mask from the form of a 4-byte
 * decimal as the number of address bits
 * 
 * функция уточняет содержимое переменной $_SESSION['ipMask']
 * которая в свое время содержит маску в виде одного числа, 
 * числа битов
 * если значение переменной равно нулю, а все вычисления привязаны 
 * к ней, то преобразовать маску из вида 4-х байтового 
 * десятичного в вид числа битов адреса
 */

class Mask4BytTo32Bit
{
    public function __construct()
    {
        $obj = new Ip10To2;
        if ($_SESSION['ipMask']!=0) ;
        else {
            $rez = $_SESSION['mask1'].'.'.
                   $_SESSION['mask2'].'.'.
                   $_SESSION['mask3'].'.'.
                   $_SESSION['mask4'];

            $nomer=$obj->ip10To2($rez);
            $i=0;
            while (substr($nomer, $i, 1)=='1') {
                $i++;
            }
            $_SESSION['ipMask']=$i;
        }
    }
}
