<?php

//файл сгенерирован CMS-DFDX 2022-03-20 19:06:45
//file generated CMS-DFDX 2022-03-20 19:06:45
session_start();
require "funcii.php";
require "functionDfdx.php";
require "class/autoloader.php";

use class\redaktor\statistic;
use class\redaktor\Header;
use class\redaktor\futter;
use src\ClassIPCalculator;

$statistik = new statistic();
$header = new Header();
$futter = new futter();
$ipCalculator = new ClassIPCalculator();

echo '<!DOCTYPE html>';
echo '<html lang="ru">';
echo '<head>';

  $header->headStart('<title>ipCalculator</title>');
  // alteration for an independent project with disabling styles from the dfdx site
  // переделка под самостоятельный проект с отключением стилей от сайта dfdx
  $header->headBootStrap5([\class\nonBD\SearchPathFromFile::createObj()->searchPath('styliipCalculator.css')]);

echo '</head>';
echo '<body>';

// функция создает переменные сессий при первом посещении страницы
// function creates session variables on first visit to the page
$header->firstCreationSessionVariables();

//работа от имени администратор
//work a administrator
$_SESSION['status']=5;

// Функция выводит картинку шапки
// The function displays the header image
$header->showSiteHeader('image/logo.png');

echo '<section class="container-fluid">';
echo '<div class="row">';

//метка для счётчика статистики посещения конкретной страницы
//label for the statistics counter of visits to a specific page
$metka="ipCalculator"; //метка для счётчика статистики посещения конкретной страницы

echo '<div class="col-xl-8 col-lg-8 col-md-9 col-sm-8 col-12">';  // Центр
// Запуск объекта, который определяет бизнес логику данной страницы
// Run an object that defines the business logic of this page
$ipCalculator->businesIPCalculator();
echo '</div>'; //закрыть центр

echo '</div>';
echo '</section>';


// Функция выводит нижнюю часть сайта
// The function displays the bottom of the site
$futter->futterGeneral($statistik,$metka);

// функция подключает вторую часть бутстрапа и закрывает документ html
// the function connects the second part of the bootstrap and closes the html document
$futter->closeHtmlDok();
