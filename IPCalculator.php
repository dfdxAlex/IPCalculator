<?php

//файл сгенерирован CMS-DFDX 2022-03-20 19:06:45
//file generated CMS-DFDX 2022-03-20 19:06:45
session_start();
require "class/autoloader.php";

use class\redaktor\statistic;
use class\redaktor\futter;
use src\ClassIPCalculator;

use src\clas\forIPCalculator\CreateHeader;

$statistik = new statistic();
$futter = new futter();
$ipCalculator = new ClassIPCalculator();

new CreateHeader();

//работа от имени администратор
//work a administrator
// $_SESSION['status']=5;



/////////////////////////// open center
echo '<section class="container-fluid">';
echo '<div class="row">';
echo '<div class="col-xl-8 col-lg-8 col-md-9 col-sm-8 col-12">';  

//метка для счётчика статистики посещения конкретной страницы
//label for the statistics counter of visits to a specific page
$metka="ipCalculator"; //метка для счётчика статистики посещения конкретной страницы

// Запуск объекта, который определяет бизнес логику данной страницы
// Run an object that defines the business logic of this page
$ipCalculator->businesIPCalculator();
echo '</div>';     //close center col
echo '</div>';     //close center row
echo '</section>'; //close center section

// Функция выводит нижнюю часть сайта
// The function displays the bottom of the site
$futter->futterGeneral($statistik,$metka);

// функция подключает вторую часть бутстрапа и закрывает документ html
// the function connects the second part of the bootstrap and closes the html document
$futter->closeHtmlDok();
