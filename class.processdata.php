<?php
require_once 'class.parser.php';
class processdata
{

	static function news() {
		print parser::Parse("http://uin-malang.ac.id/f/196580210");
	}

	static function info() {
		print parser::Parse("http://uin-malang.ac.id/f/3215949433");
	}

	static function article() {
		print parser::Parse("http://uin-malang.ac.id/f/4218132778");
	}

	static function mahad() {
		print parser::Parse("http://uin-malang.ac.id/f/1");
	}

}