<?php
namespace src\clas\forIPCalculator;

use src\clas\forIPCalculator\HeadStartDecorator;
use src\clas\forIPCalculator\HeadBootStrap5Decorator;
use class\redaktor\interface\trait\toHeader\FirstCreationSessionVariables;
use class\redaktor\interface\trait\toHeader\ShowSiteHeader;


class CreateHeader
{
    use \class\redaktor\interface\trait\TraitInterfaceWorkToBd;
    public function __construct()
    { 

        // проверить наличие таблиц в базе данных
        // check for tables in the database
        $this->tableValidationCMS();

        echo new HeadStartDecorator('<title>ipCalculator</title>');
        new HeadBootStrap5Decorator([\class\nonBD\SearchPathFromFile::createObj()->searchPath('src/css/styliipCalculator.css')]);
        new FirstCreationSessionVariables;
        new ShowSiteHeader('image/logo.png');
    }
    
}
