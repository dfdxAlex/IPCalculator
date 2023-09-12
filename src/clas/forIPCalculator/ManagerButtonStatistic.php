<?php
namespace src\clas\forIPCalculator;

class ManagerButtonStatistic
{
    static public function managerButtonStatistic()
    {
        if ($_SESSION['regimRaboty']==22) $this->statistikOnOff();
    }
}
