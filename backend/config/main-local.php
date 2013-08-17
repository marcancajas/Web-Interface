<?php
/**
 * main-local.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/22/12
 * Time: 6:25 PM
 *
 * This file should have the configuration settings of your backend application that will be merged to the main.php.
 *
 * This configurations should be only related to your development machine.
 */

return array(
	'components' => array(
		'urlManager' => array(
			'urlFormat' => $params['url.format'],
			'showScriptName' => $params['url.showScriptName'],
			'rules' => $params['url.rules']
		)
	)
);