<?php

return array(
	'defaultController' => 'weather',
	'import' => array(
		'application.components.*',
		'application.models.*',
	),
	'params'=>array(
		'openWeather'=>array(
			'appId'  =>'',
			'version'=>'2.5',
			'baseUrl'=>'http://api.openweathermap.org'
		)
	)
);
