<?php

session_start();

require "class/autoloader.php";

use src\clas\forIPCalculator\{
                              CreateHeader,
                              Footer,
                              ContentStart,
                              ContentFinish
                             };
                             
use src\ClassIPCalculator;
use class\nonBD\user\UserStatusManager;


new CreateHeader();

new UserStatusManager(false);

new ContentStart;

new ClassIPCalculator();

new ContentFinish;

new Footer;



