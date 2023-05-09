<?php
// namespace class\redaktor;

//файл сгенерирован CMS-DFDX 2022-03-20 19:06:45
//file generated CMS-DFDX 2022-03-20 19:06:45
session_start();
require "funcii.php";
require "functionDfdx.php";
// require "../../image/swapImages.php";
require "class/autoloader.php";

use class\redaktor\Modul;
use class\redaktor\statistic;
use class\redaktor\Header;
use class\redaktor\futter;
use class\redaktor\NonTemplates;
use src\ClassIPCalculator;

$redaktor = new Modul();
$statistik = new statistic();
$header = new Header();
$futter = new futter();
$nonTemplates = new NonTemplates();
$ipCalculator = new ClassIPCalculator();

echo '<!DOCTYPE html>';
echo '<html lang="ru">';
echo '<head>';

  // $statistik->googleAnalitic('https://www.googletagmanager.com/gtag/js?id=G-MF3F7YTKCQ'); 
  $header->headStart('<title>ipCalculator</title>');
  // alteration for an independent project with disabling styles from the dfdx site
  // переделка под самостоятельный проект с отключением стилей от сайта dfdx
  $header->headBootStrap5([\class\nonBD\SearchPathFromFile::createObj()->searchPath('styliipCalculator.css')]);

echo '</head>';
echo '<body>';

// функция создает переменные сессий при первом посещении страницы
// funkcja tworzy zmienne sesji przy pierwszej wizycie na stronie
// function creates session variables on first visit to the page
$header->firstCreationSessionVariables();

// Функция проверяет поля логина и пароля, если они заполнены, то вытягивает из базы статус 
// пользователя и заносит его в переменную $_SESSION["status"]
// Также функция обрабатывает нажатие кнопки Вход и Выход
   
// The function checks the login and password fields, if they are filled, then pulls the user status 
// from the database and enters it into the $_SESSION["status"] variable
// Also, the function handles the button press Enter and Exit
//$header->checkUserStatus();
$_SESSION['status']=5;

// Функция выводит картинку шапки
// The function displays the header image
$header->showSiteHeader('image/logo.png');

echo '<section class="container-fluid">';
echo '<div class="row">';

// имя таблица со статьями для функции news1
// table name with articles for news1 function
$nameBD='bd2';
$nameBD='nameTD='.$nameBD;

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
