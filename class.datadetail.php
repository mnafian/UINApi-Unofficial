<?php
require_once 'class.domparser.php';
\Slim\Slim::registerAutoloader();
use \Slim\Slim AS Slim;
$app = new Slim();

class datadetail
{

	static function detail() {
		$app = Slim::getInstance();
		 $link = $app->request->params('guid');
		 $judul = $app->request->params('judul');

		$result = domparser::Parse($link, $judul);
		print json_encode(array_values($result));
	}

}