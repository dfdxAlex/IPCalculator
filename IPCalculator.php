<?php

//файл сгенерирован CMS-DFDX 2022-03-20 19:06:45
//file generated CMS-DFDX 2022-03-20 19:06:45
session_start();
require "class/autoloader.php";

use src\ClassIPCalculator;

use src\clas\forIPCalculator\CreateHeader;
use class\nonBD\user\UserStatusManager;

$ipCalculator = new ClassIPCalculator();

new CreateHeader();

new UserStatusManager(false);

/////////////////////////// open center
echo '<section class="container-fluid">';
echo '<div class="row">';
echo '<div class="col-xl-8 col-lg-8 col-md-9 col-sm-8 col-12">';  


// Запуск объекта, который определяет бизнес логику данной страницы
// Run an object that defines the business logic of this page
$ipCalculator->businesIPCalculator();
echo '</div>';     //close center col
echo '</div>';     //close center row
echo '</section>'; //close center section


// The function displays the bottom of the site
use class\classNew\futter\FutterGeneral;
new FutterGeneral("ipCalculator");

use class\classNew\futter\HtmlClose;
new HtmlClose;
