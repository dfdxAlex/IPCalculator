<?php

session_start();
require "class/autoloader.php";

use src\ClassIPCalculator;

use src\clas\forIPCalculator\CreateHeader;
use class\nonBD\user\UserStatusManager;
use src\clas\forIPCalculator\Footer;
use src\clas\forIPCalculator\ContentStart;
use src\clas\forIPCalculator\ContentFinish;

$ipCalculator = new ClassIPCalculator();

new CreateHeader();
new UserStatusManager(false);

new ContentStart;

$ipCalculator->businesIPCalculator();

new ContentFinish;

new Footer;

