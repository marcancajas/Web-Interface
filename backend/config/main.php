<?php
/**
 * main.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/22/12
 * Time: 5:48 PM
 *
 * This file holds the configuration settings of your backend application.
 **/
$backendConfigDir = dirname(__FILE__);

$root = $backendConfigDir . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..';

$params = require_once($backendConfigDir . DIRECTORY_SEPARATOR . 'params.php');

// Setup some default path aliases. These alias may vary from projects.
Yii::setPathOfAlias('frontendBaseUrl', 'localhost/Curtin-Webinterface/backend/www');
Yii::setPathOfAlias('root', $root);
Yii::setPathOfAlias('common', $root . DIRECTORY_SEPARATOR . 'common');
Yii::setPathOfAlias('backend', $root . DIRECTORY_SEPARATOR . 'backend');
Yii::setPathOfAlias('www', $root. DIRECTORY_SEPARATOR . 'backend' . DIRECTORY_SEPARATOR . 'www');
/* uncomment if you need to use frontend folders */
/* Yii::setPathOfAlias('frontend', $root . DIRECTORY_SEPARATOR . 'frontend'); */


$mainLocalFile = $backendConfigDir . DIRECTORY_SEPARATOR . 'main-local.php';
$mainLocalConfiguration = file_exists($mainLocalFile)? require($mainLocalFile): array();

$mainEnvFile = $backendConfigDir . DIRECTORY_SEPARATOR . 'main-env.php';
$mainEnvConfiguration = file_exists($mainEnvFile) ? require($mainEnvFile) : array();

return CMap::mergeArray(
	array(
		'name' => 'JAMEngine Backend',
		// @see http://www.yiiframework.com/doc/api/1.1/CApplication#basePath-detail
		'basePath' => 'backend',
		// set parameters
		'params' => $params,
		// preload components required before running applications
		// @see http://www.yiiframework.com/doc/api/1.1/CModule#preload-detail
		'preload' => array('bootstrap', 'log', 'fontawesome'),
		// @see http://www.yiiframework.com/doc/api/1.1/CApplication#language-detail
		'language' => 'en',
		// using bootstrap theme ? not needed with extension
//		'theme' => 'bootstrap',
		// setup import paths aliases
		// @see http://www.yiiframework.com/doc/api/1.1/YiiBase#import-detail
		'import' => array(
			'common.extensions.yii-mail.YiiMailMessage',
			'common.components.*',
			'common.extensions.*',
			'common.extensions.giix.components.*', // giix components
			'common.extensions.giix.components.*',
			/* uncomment if required */
			/* 'common.extensions.behaviors.*', */
			/* 'common.extensions.validators.*', */
			'common.models.*',
			// uncomment if behaviors are required
			// you can also import a specific one
			/* 'common.extensions.behaviors.*', */
			// uncomment if validators on common folder are required
			/* 'common.extensions.validators.*', */
			'application.components.*',
			'application.controllers.*',
			'application.models.*'
		),
		/* uncomment and set if required */
		// @see http://www.yiiframework.com/doc/api/1.1/CModule#setModules-detail
		'modules' => array(
		),
		'behaviors' => array(
			'onBeginRequest' => array(
       			'class' => 'application.extensions.behaviors.RequireLogin',
    		),
		),
		'homeUrl'=>array('User'),
		'components' => array(
			'fontawesome' => array(
				'class'=>'common.extensions.fontawesome.components.FontAwesome',
				'publishAwesome'=>FALSE
			),
			'user' => array(
				'class'=>'backend.components.WebUser',
				'allowAutoLogin'=>false,
			),
			'session' => array (
            	'autoStart' => true,
				'timeout'=>30,
				//'cookieMode' => 'none',
			),
			/* load bootstrap components */
			'bootstrap' => array(
				'class' => 'common.extensions.bootstrap.components.Bootstrap',
				'responsiveCss' => true,
			),
			'errorHandler' => array(
				// @see http://www.yiiframework.com/doc/api/1.1/CErrorHandler#errorAction-detail
				'errorAction'=>'site/error'
			),
			//Connection details for JAMAccount
			'db'=> array(
				'connectionString' => $params['JAMAccount.db.connectionString'],
				'username' => $params['JAMAccount.db.username'],
				'password' => $params['JAMAccount.db.password'],
				'schemaCachingDuration' => YII_DEBUG ? 0 : 86400000, // 1000 days
				'enableParamLogging' => YII_DEBUG,
				'charset' => 'utf8',
				'class' => 'CDbConnection',
			),
			//Connection Details for JAMGame
			'dbGame'=> array(
				'connectionString' => $params['JAMGame.db.connectionString'],
				'username' => $params['JAMGame.db.username'],
				'password' => $params['JAMGame.db.password'],
				'schemaCachingDuration' => YII_DEBUG ? 0 : 86400000, // 1000 days
				'enableParamLogging' => YII_DEBUG,
				'charset' => 'utf8',
				'class' => 'CDbConnection',
			),
			'mail' => array(
                'class'=>'common.extensions.yii-mail.YiiMail',
                'transportType'=>'smtp',
                'transportOptions'=>array(
                	'host'=>'smtp.gmail.com',
					'username'=>'joshgiblett@gmail.com',
					'password'=>'1F3rrarri1',
					'port'=>465,
					'encryption'=>'ssl',
				),
			),
			'urlManager' => array(
				'urlFormat' => 'path',
				'showScriptName' => false,
				'urlSuffix' => '/',
				'rules' => $params['url.rules']
			),
			/* make sure you have your cache set correctly before uncommenting */
			/* 'cache' => $params['cache.core'], */
			/* 'contentCache' => $params['cache.content'] */
		),
	),
	CMap::mergeArray($mainEnvConfiguration, $mainLocalConfiguration)
);