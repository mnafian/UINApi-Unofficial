<?php

class parser {

	public function Parse ($url) {

		$fileContents= file_get_contents($url);

		$fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);

		$fileContents = trim(str_replace('"', "'", $fileContents));

		$simpleXml = simplexml_load_string($fileContents, NULL, LIBXML_NOCDATA);

		$json = json_encode($simpleXml);

		return $json;
	}

}

?>