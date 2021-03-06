<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

Yii::setPathOfAlias('chosen', dirname(__FILE__).'/../extensions/chosen');

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Система учёта учеников и учителей',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'1',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
                'urlManager'=>array(
                   'urlFormat'=>'path',
                   'showScriptName'=>false,
                   'rules'=>array(
                      '/' => 'site/index',
                       
                      '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                      '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                      '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                   ),
                ),		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=test',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
                        'tablePrefix' => 'tbl_',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
                'assetManager' => array(
                    'forceCopy' => false, //YII_DEBUG,
                ),
                'clientScript' => array(
                    'scriptMap' => array(
                    ),
                    'packages' => array(
                        
                    ),
                ),            
                'chosen' => array(
                    'class'=>'ext.chosen.Chosen',
                ),            
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);