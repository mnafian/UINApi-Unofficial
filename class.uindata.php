<?php
require_once 'class.domparser.php';
class uindata
{

	static function profil() {
		$result = domparser::Parse("http://uin-malang.ac.id/s/uin/profil", "Profil Universitas");
		print json_encode(array_values($result));
	}

	static function akademik() {
		$result = domparser::Parse("http://uin-malang.ac.id/s/uin/akademik", "Akademik");
		print json_encode(array_values($result));
	}

	static function organisasi() {
		$result = domparser::Parse("http://uin-malang.ac.id/s/uin/organisasi", "Organisasi");
		print json_encode(array_values($result));
	}


	static function pendaftaran() {
		$result = domparser::Parse("http://uin-malang.ac.id/s/uin/pendaftaran", "Pendaftaran");
		print json_encode(array_values($result));
	}

}