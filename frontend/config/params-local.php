<?php
/**
 * params-local.php
 *
 * Hold local parameters array for your local development. It will be merged with params-env.php file and its resulting
 * array to params.php which will be merged with common/params.php
 *
 * @author: antonio ramirez <antonio@clevertech.biz>
 * Date: 7/22/12
 * Time: 5:59 PM
 *
 *
 */
return array(
	'JAMAccount.db.connectionString'=>'mysql:host=127.0.0.1;dbname=jamaccount',
        'JAMAccount.db.username'=>'webadmin',
        'JAMAccount.db.password'=>'4dm1n1st3r',
        'JAMGame.db.connectionString'=>'mysql:host=localhost;dbname=jamgame',
        'JAMGame.db.username'=>'webadmin',
        'JAMGame.db.password'=>'4dm1n1st3r',
);