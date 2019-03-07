<?php

include_once '../config/config.php'; //Инициализация настроек
include_once '../library/mainFunctions.php'; //Основные функции
// http://myshop.loc/?controller=index&action=test
//определяем с каким контроллером будем работать (ucfirst - делает первую букву заглавной, остальные маленькие)
$contollerName = isset($_GET['contoller']) ? ucfirst($_GET['contoller']) : 'Index';
//echo 'Подключаемый php файл (Контроллер) = ' .$contollerName . '<br>';
// определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

//echo 'Функция формирующая страницу = ' .$actionName . '<br>';

// подключаем контроллер
//include_once '../controllers/' . $contollerName . 'Controller.php';

// формируем название функции
//$function = $actionName . 'Action';

//echo 'Полное название вызываемой функции = ' .$function . '<br>';

//$function();

loadPage($contollerName, $actionName);