<?php

class domparser {

	public function Parse ($url, $tittle) {
		libxml_use_internal_errors(true);
	    $doc = new DOMDocument();
  		$doc->loadHTMLFile($url);
	    $content = array();

		$xpath = new DOMXpath($doc);
  		$articles = $xpath->query('//div[@id="content_main"]');
		
		foreach($articles as $item) {

			if ($tittle == "Akademik") {
				foreach($xpath->query('//ol/li') as $li) {
				    $text = $li->nodeValue . PHP_EOL;
				    $content[] = array(
				      	'text' => $text	
				    );
				}
			} else {
				foreach($xpath->query('//div[@align="justify"]') as $val) {
					$text = $val->nodeValue;
				    $content[] = array(
				    	'tittle' => $tittle,
				      	'text' => $text	
				    );
				}
			}
		}
		return $content;
	}
}