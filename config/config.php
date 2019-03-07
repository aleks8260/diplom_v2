<?php
/*
Файл настроек
*/

// Константы для обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');

/*
Для работы со смарти
*/
// используемый шаблон 
$template = 'default';

// пути к файлам шаблонов (*.tpl)
define ('TemplatePrefix', "../views/{$template}/");
define ('TemplatePostfix', '.tpl');

// пути к файлам шаблонов в вебпространстве
define ('TemplateWebPath', "/templates/{$template}/");

//> Инициализация шаблонизатора Smarty
// put full path to Smarty.class.php
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c'); //откомпилированные шаблоны
$smarty->setCacheDir('../tmp/smarty/cache'); //для кэширования
$smarty->setConfigDir('../library/Smarty/configs'); //для конфигураций (не используется, но для Smarty нужен)

$smarty->assign('teplateWebPath', TemplateWebPath); //имя создаваемой переменой -> значение