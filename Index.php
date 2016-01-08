<?php


	public function sayHelloTo($lang, $name) {

		if ($lang == 'da-DK') {
			$hello = 'Hej';
		} else if ($lang == 'en-EN') {
			$hello = 'Hello';
		}
		$string = $hello . ' ' . $name;

		return $string;
	}

	echo sayHelloTo('da-DK', 'Sanni! :)');
	
?>