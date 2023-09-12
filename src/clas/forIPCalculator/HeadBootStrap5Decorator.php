<?php
namespace src\clas\forIPCalculator;

use class\redaktor\interface\trait\toHeader\HeadBootStrap5;

class HeadBootStrap5Decorator
{
    public function __construct(array $listFileStyleDecorator)
    {
        echo new HeadBootStrap5($listFileStyleDecorator).'</head> <body>';
    }
}
