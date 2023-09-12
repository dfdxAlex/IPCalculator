<?php
namespace src\clas\forIPCalculator;

use class\redaktor\interface\trait\toHeader\HeadStart;

class HeadStartDecorator
{
    private $headStart;

    public function __conctruct($title)
    {
        $this->headStart = new HeadStart($title);
    }

    public function __toString()
    {
        return '<!DOCTYPE html>'.
               '<html lang="ru">'.
               '<head>'.$this->headStart;
    }

}
