<?php

$CONFIG = new stdClass();
/*
$CONFIG->wwwroot = 'https://localhost/presence-manager';
$CONFIG->apiroot = $CONFIG->wwwroot.'/api/json';

$CONFIG->debug= 1;
$CONFIG->verbose = 1;

$CONFIG->dbhost = 'localhost';
$CONFIG->dbname = 'presence';
$CONFIG->dbuser = 'root';
$CONFIG->dbpassword = 'doremi';
*/
$CONFIG->wwwroot = 'https://presence-manager.orchestra.io';
$CONFIG->apiroot = $CONFIG->wwwroot.'/api/json';

$CONFIG->debug= 1;
$CONFIG->verbose = 1;

$CONFIG->dbhost = 'a.db.shared.orchestra.io';
$CONFIG->dbname = 'db_fbaebcba';
$CONFIG->dbuser = 'user_fbaebcba';
$CONFIG->dbpassword = 'ampuTM8vpEULhq';

date_default_timezone_set('UTC');
