<?php
namespace src\clas\forIPCalculator;

use src\clas\forIPCalculator\HeadStartDecorator;
use src\clas\forIPCalculator\HeadBootStrap5Decorator;
use class\redaktor\interface\trait\toHeader\FirstCreationSessionVariables;
use class\redaktor\interface\trait\toHeader\ShowSiteHeader;

class CreateHeader
{
    public function __construct()
    { 
        echo new HeadStartDecorator('<title>ipCalculator</title>');
        new HeadBootStrap5Decorator([\class\nonBD\SearchPathFromFile::createObj()->searchPath('src\css\styliipCalculator.css')]);
        new FirstCreationSessionVariables;
        new ShowSiteHeader('image/logo.png');
    }
    
}
