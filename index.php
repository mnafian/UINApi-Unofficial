<?php
require_once 'config.inc.php';
// require 'vendor/autoload.php';
\Slim\Slim::registerAutoloader();
use \Slim\Slim AS Slim;
$app = new \Slim\Slim();

require_once 'class.processdata.php';
require_once 'class.uindata.php';
require_once 'class.datadetail.php';

$app->get('/data/news', array('processdata', 'news'));
$app->get('/data/info', array('processdata', 'info'));
$app->get('/data/article', array('processdata', 'article'));
$app->get('/data/mahad', array('processdata', 'mahad'));

$app->get('/data/profile', array('uindata', 'profil'));
$app->get('/data/academic', array('uindata', 'akademik'));
$app->get('/data/organization', array('uindata', 'organisasi'));
$app->get('/data/registration', array('uindata', 'pendaftaran'));

$app->post('/data/detail/', array('datadetail', 'detail'));

$app->contentType('application/json');
$app->run();