<?php
namespace src\clas\forIPCalculator;

class ManagerButtonMat
{
    static public function redaktorForMat()
    {
        if ($_SESSION['regimRaboty']==21) $this->redactMaty();
    }
}
