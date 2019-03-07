<?php
function loadPage($contollerName, $actionName = 'index')
{
	include_once PathPrefix . $contollerName . PathPostfix;

	$function = $actionName . 'Action';
	$function();
}